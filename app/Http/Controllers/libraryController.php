<?php

namespace App\Http\Controllers;
use App\Http\Requests\addBook;
use App\library;
use App\book;
use App\department;
use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use App\bookIssue;
use Illuminate\Support\Facades\DB;

class libraryController extends Controller
{
    public function index()
    {
        return view('mainlayout.index');

    }

    public function book(Request $Request)
    {
        $book = book::get();
        return view('admin.book')->with('book', $book);
    }

    public function addBook()
    {
        $department = department::get();
        return view('admin/addBook')->with(['department' => $department]);
    }

    public function saveBook(addBook $Request)
    {

        $book = new book();
        $this->validate($Request, [
            'bookName' => 'required',
            'bookNumber' => 'required',
            'department' => 'required',
        ]);
        $book->bookName = $Request->bookName;
        $book->bookNumber = $Request->bookNumber;
        $book->department_id = $Request->department;
        $book->save();
        return redirect('book')->with('message','A Book has been added');
    }

    public function deleteBook($id)
    {
        $book = book::where('id', $id)->delete();
        return redirect('book');
    }

    public function editBook($id)
    {

        $book = book::where('id', $id)->first();
        $department = department::where('id', $book->department_id)->first();
        // dd($department->departmentName);
        return view('admin/editBook')->with(['book' => $book, 'department' => $department]);
    }
    public function updateBook(Request $Request)
    {
$this->validate($Request,[
   'bookName'=>'required',
    'bookNumber'=>'required',
]);
$update=book::where('id',$Request->id)->update(['bookName'=>$Request->bookName,'bookNumber'=>$Request->bookNumber]);
    return redirect('book');
    }

    public function studentsRecord()
    {
      // $user=bookIssue::with(['issuebook'])->get();

       $user = Student::with(['student', 'batch', 'department','issuebook'])->withCount('issuebook')->get();


        return view('library/labrary')->with('user', $user);

    }

    public function bookIssue($id)
    {
        $student=Student::where('id',$id);
        $book = book::get();

        $department = department::get();
        return view('library/bookIssue')->with(['book' => $book, 'department' => $department]);
    }
    public function issueBook(Request $Request)
    {
        /*$validatedData = $Request->validate([
            'bookName' => 'required',
            'date' => 'required',

        ]);
   */  $issueBook=new bookIssue();

        $issueBook->book_Id = $Request->bookName;

      $issueBook->student_id=$Request->id;
        $issueBook->issueDate = $Request->date;
        $issueBook->save();
        return redirect('studentsRecord')->with('message','Book Issued SuccessFully');

    }
    public function showBook($id)
    {
         $student = Student::with(['student', 'batch', 'department'])->withCount('issuebook')->where('id',$id)->first();
          /*$book=book::WhereHas('issueBook',function($q) use($id){
          $q->where('student_id',$id);
          })->get();*/
          $book=DB::table('book_issues')->select('books.*','book_issues.*')->join('books','books.id','=','book_issues.book_id')->get();
     return  view('library/alotedBooks')->with(['book'=>$book,'student'=>$student]);
    }
    public function update($id)
    {
        $bookissue= bookIssue::where('id',$id)->update();
       $student = Student::with(['student', 'batch', 'department'])->withCount('issuebook')->upvotes_count('status',0)->where('id',$id)->first();

        Session::flash('message',  'update_success');
        return redirect('library/alotedBooks');

    }
    public function returnBook($id)
    {
        $book=bookIssue::find($id);
        $book->status=1;
        $book->returnDate=Carbon::now();
        /*$bookissue=bookIssue::where('returnDate'-'issueDate'>15)->get();
        if(count($bookissue>1))
        {
            $fine=$bookissue*10;
            $book->fine=$fine;
        }*/

        /*$book->fine=bookIssue::where('id',$id)->decrement('returnDate','issueDate')->first();
        */
        $book->save();
        return redirect('/studentsRecord')->with('message','Book Returned Successfully');


    }
    public function LibraryRecord()
    {
        $bookissue = bookIssue::with('student.student','student.department','student.batch','student.program','book.issuebook')

            ->get();
        /*return $bookissue;*/
        return view('library.libraryRecord')->with('bookissue',$bookissue);
    }
}