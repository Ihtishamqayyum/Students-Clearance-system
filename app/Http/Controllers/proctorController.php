<?php

namespace App\Http\Controllers;

use App\proctor;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class proctorController extends Controller
{
    public function index()
    {
        return view('proctor/proctor');
    }
    public function proctor()
    {
        $student=Student::  with(['student','department','batch','program'])->get();
/*return $student;*/
        return view('proctor/std')->with('student',$student);
    }
    public function fine()
    {
        return view('proctor/fine');

    }
    public function fined(Request $request)
    {
        $proctor=new proctor();
        $proctor->fined=$request->fine;
        $proctor->RecievedFine=$request->fine;
        $proctor->student_id=$request->id;
        $proctor->reason=$request->reason;
        $proctor->save();
        return redirect('std');
    }

    public function stdRecord()
    {/*
        $std=Db::table('proctors')->select('batches.*','users.*','students.*','proctors.*','departments.*')

            ->join('students','proctors.student_id','students.id')
            ->join('users','students.userId','users.id')
            ->join('departments','students.depId','departments.id')
            ->join('batches','students.batchId','batches.id')->where('users.userType','Student')

            ->get();
        return($std);*/
        $student=proctor::with(['std','std.student','std.department','std.batch','fine'])->get();
//        return($student)
//
        /*$proctor=proctor::get();
        return($proctor);*/
        return view('proctor/fineRecord')->with('student',$student);
    }
    public function SubmitFine($id)
    {
        $proctor=proctor::where(['id'=>$id])->update(['RecievedFine'=>0]);
        return redirect('stdRecord');
    }
}
