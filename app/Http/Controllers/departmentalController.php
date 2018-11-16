<?php

namespace App\Http\Controllers;
use App\department;
use App\examination;
use App\paperfee;
use App\Student;
use App\subject;
use App\User;
use Auth;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class departmentalController extends Controller
{
    public function index()

{
    if(Auth::user()->department_id==NULL){
    $department=department::get();
           return view('examination/department')->with('department',$department);
        }
        else {
        $student=department::where('id',Auth::user()->department_id);
        return view('mainlayout.index')->with('student',$student);
        }
}

public function ChooseDepartment(Request $request)
{
    $user=User::where('id',$request->id)->update(['department_id'=>$request->department]);

    return view('mainlayout.index');


}
public function stdExamRecord()
{
/*$department=department::where('id',Auth::user()->department_id)->get();*/

/*   $user=User::with('userdep','userdep.students','userdep.students.batch','userdep.students.program')->where('id',Auth::user()->id)->get();*/
$student=Student::with('student','batch','program','department')->where('depId',Auth::user()->department_id)->get();
/*return $student;*/

    return view('examination/stdExamRecord')->with('student',$student);
  /*  $student=DB::table('students')->select('students.*','departments.*','batches.*','programs.*','users.*')
        ->join('users','users.id','students.userId')
        ->join('departments', 'students.depId','departments.id')
        ->join('batches','students.batchId','students.id')
        ->join('programs','students.programId','students.id')->where('departments.id'==$department)->get();
    return $student;*/

}
public function subjects()
{
    $subject=subject::with('department','program')->where('department_id',Auth::user()->department_id)->get();


    return view ('examination/subjects')->with('subject',$subject);
}
public function marks($id)
{
    $subject=subject::where('department_id',Auth::user()->department_id)->get();

    return view('examination/marks')->with('subject',$subject);
}
public function savemarks(Request $request)
{
    $examination=new examination();
    $examination->student_id=$request->id;
    $examination->subject_id=$request->subject;
    $examination->marks=$request->marks;
    $examination->totalMarks=$request->totalmarks;
    $examination->remarks=$request->remarks;
    $examination->attempts=1;
    $examination->save();
    return redirect('examination');
}
public function examinationRecord()
{
$exam=examination::with('student','subject','student.student','student.department','student.batch')->get();
/*return $exam;*/
return view('examination.examination')->with('exam',$exam);
}
public function failpaper()
{

    $subject=subject::where('department_id',Auth::user()->department_id)->get();
    /*return $subject;*/
return view('examination/fail')->with('subject',$subject);
}
public function updatemarks(Request $request,$id)
{
    $fee=paperfee::where('subject_id',$request->id,'student_id',3);
    if($fee){
    $examination=examination::where('id',$id)
        ->update(
            [
                'marks'=>$request->marks,
                'remarks'=>$request->remarks,

                'attempts' => DB::raw('attempts + 1')

    ]);

    return redirect('examinationRecord')->with('message','Marks Updated');
    }
    else{
        return redirect('examinationRecord')->with('message','please Submit paper fee');
    }
}
public function reapearFee($id)
{

$subject=subject::where('id',Auth::user()->department_id)->get();
return view('examination.reapearFee')->with('subject',$subject);
}
public function saveFee(Request $request)
{
    $paperfee= new paperfee();
    $paperfee->student_id=$request->id;
    $paperfee->subject_id=$request->subject;
    $paperfee->amountsubmitted=$request->amountSubmitted;
    $paperfee->totalamount=$request->totalFee;
    $paperfee->default=$request->totalFee-$request->amountSubmitted;
$paperfee->save();
return redirect('examinationRecord');
}
}
