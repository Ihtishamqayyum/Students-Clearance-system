<?php

namespace App\Http\Controllers;

use App\Http\Requests\departmentRequest;
use App\Http\Requests\programRequest;
use App\Http\Requests\SubjectRequest;
use App\semester;
use App\subject;
use Illuminate\Http\Request;
use App\department;
use Session;
use App\program;
use Illuminate\Support\Facades\Db;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mainlayout/index');
    }
    public function  store(){
        $department=department::get();
      
        return view('admin/department')->with('department',$department);
    }
    public  function addDepartment(){
        return view('admin/addDepartment');
    }
    public function deleteDepartment($id)
    {
        $department=department::where('id',$id)->delete();
        return redirect('department')->with("message","Record Deleted SUccessfully");
    }
     public function updateDepartment(Request $Request){
        // dd($Request->id);
        
        $this->validate($Request,
            ['department'=>'required']);
        $batch= department::where('id',$Request->id)->update(['departmentName'=>$Request->department]);
        Session::flash('message',  'update_success');
        return redirect('department')->with('message',' department has been added');
        


    }
    public function editDepartment($id)
    {
        $department=department::where('id',$id)->first();
        return view('admin/editDepartment')->with('department',$department);
    }
    public function saveDepartment(departmentRequest $request)
    {
        $department=new department;
      /*  $this->validate($request,
            [
                'departmentName' => 'required|unique::departments,department',
            ]);*/


        $department->departmentName=$request->department;
        $department->save();
        return redirect('department')->with('status','department Added Successfully');

    }
    public function requests()
    {
        return view('provost/requestUser');
    }
    public function program()
    {
        $program = program::with('program')->get();



        return view('provost/program')->with('program',$program);
    }
    public function deleteProgram($id)
    {
        $program=program::where('id',$id)->delete();
        return redirect('program')->with("message","Record Deleted SUccessfully");
    }
    public function addProgram()
    {
$department=department::get();
        return view('provost/addProgram')->with('department',$department);
    }
    public function saveProgram(programRequest $request)
    {
        $program=new program();

        $program->programName=$request->program;
        $program->department_id=$request->department;
        $program->save();
        return redirect('program')->with('message','Record Deleted');
    }
    public function editProgram($id)
    {
         $program = program::with('program')->where('id',$id)->first();

return view('provost/editProgram')->with('program',$program);

    }
    public function updateProgram(Request $request)
    {
        $this->validate($request,
            ['program'=>'required']);

        $program= program::where('id',$request->id)->update(['programName'=>$request->program]);
        Session::flash('message',  'Program updated successfully');
        return redirect('program');

    }
    public function subject()
    {
        $subject=subject::with('department','program','semester')->get();
/*return $subject;*/

        return view ('examination/subjects')->with('subject',$subject);
    }
    public function addsubjects()
    {
        $program=program::get();
        $department=department::get();
        $semester=semester::get();
        return view('provost/addsubjects')->with(['department'=>$department,'program'=>$program,'semester'=>$semester]);
    }
    public function savesubject(SubjectRequest $request)
    {

        $subject=new subject();
        $subject->subjectName=$request->subject;
        $subject->department_id=$request->department;
        $subject->program_id=$request->program;
        $subject->semester_id=$request->semester;
       $subject->save();
        return redirect('subject')->with('message','A new subject has been added');
    }

public function deletesubject($id)
{
    $subject=subject::where('id',$id)->delete();
    return redirect('subject')->with('message','Subject deleted Successfully');
}
public function editsubject($id)
{
    $subject=subject::where('id',$id)->first();
$department=department::get();
$semester=semester::get();
$program=program::get();
    return view('provost/editsubject')->with(['subject'=>$subject,'department'=>$department,'program'=>$program,'semester'=>$semester]);

}
public function updatesubject(Request $request,$id)
{
    $subject=subject::where('id',$id)->update(['subjectName'=>$request->subject,'department_id'=>$request->department,'semester_id'=>$request->semester,'program_id'=>$request->program]);
    return redirect('subject')->with('message','Subject Updated');
}
}
