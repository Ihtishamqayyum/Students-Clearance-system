<?php

namespace App\Http\Controllers;

use App\alotKit;
use App\bookIssue;
use App\busAlot;
use App\fee;
use App\proctor;
use App\rAlot;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\DB;

use Auth;
use App\department;
use App\batch;

use App\program;
use App\semester;
class StudentController extends Controller
{
    public function index()
    {


        $count = student::where('userId', Auth::user()->id)->count();
        if ($count == 0) {

            $department = department::get();

            $batch = batch::get();
            $program = program::get();

            $semester = semester::get();
            return view('student/completeProfile')->with(['department' => $department, 'batch' => $batch, 'program' => $program, 'semester' => $semester]);
        } else {
            return view('mainlayout/index');
        }
    }

    public function completeprofile()
    {
        return view('mainlayout/index');
    }

    public function savestudent(Request $Request)
    {

        $form = new Student();

        $form->Fathername = $Request->fathername;
        $form->rollNo = $Request->rollNo;
        $form->depId = $Request->department;
        $form->batchId = $Request->batch;
        $form->userId=Auth::user()->id;
        $form->programId = 1;

        $form->desciplineId = $Request->discipline;
        $form->dob = '2018-09-08 18:46:24';
        $form->contactNo=$Request->mobileNumber;
        $form->gender=$Request->gender;
        $form->address=$Request->address;
        $form->save();
        return view('mainlayout/index');
    }

    /**
     * @return $this|\Illuminate\Support\Collection
     */
    public function libraryStatus()
    {

        $bookissue = bookIssue::with('student.student','student.department','student.batch','student.program','book.issuebook')

            ->where('student_id',Auth::user()->id)->get();

/*return $bookissue;*/

      return view('student.library')->with('bookissue',$bookissue );

    }
    public function transportStatus()
    {
        $bus=busAlot::with('student.student','student.department','student.batch','student.program','bus.busType','semester','fee.studentfee')->where('student_id',Auth::user()->id)->get();
        /*return $bus;*/
        return view('student.transportStatus')->with('bus',$bus);
    }
    public function sportStatus()
    {
        $kits=alotKit::with('student.student','student.department','student.batch','student.program','kits.alotKits')->where('student_id',Auth::user()->id)->get();
        /*return $kits;*/
        return view('student.sportStatus')->with('kits',$kits);
    }
    public function hostelStatus()
    {
        $rooms=rAlot::with('student.student','student.department','student.batch','student.program','room.roomNo','semester','fee.studenthostelfee')->where('student_id',Auth::user()->id)->get();
/*return $rooms;*/
return view('student.hostelStatus')->with('rooms',$rooms);
    }
    public function financeStatus()
    {
        $fees=fee::with('semesterFee.student','semesterFee.department','semesterFee.batch','semesterFee.program','semester')->where('level',1)->where('student_id',Auth::user()->id)->get();
        /*return $fees;*/
       return view('student.finance')->with('fees',$fees);
    }
    public function proctorStatus()
    {
        $proctors=proctor::with('fine.student','fine.department','fine.batch','fine.program')->where('student_id',Auth::user()->id)->get();
     /*return $proctors;*/
     return view('student.proctorStatus')->with('proctors',$proctors);

    }
    public function examination()
    {
        dd('examination');
    }
}