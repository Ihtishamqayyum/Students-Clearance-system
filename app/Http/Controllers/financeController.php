<?php

namespace App\Http\Controllers;

use App\fee;
use App\feeType;
use App\semester;
use App\Student;
use Illuminate\Http\Request;

class financeController extends Controller
{
    public function index()
    {
        $student=Student::with('student','department','batch')->get();

        return view('finance/finance')->with('student',$student);
    }
    public function submitFee()
    {
        $semester=semester::get();
        $feelevel=feeType::get();
        return view('finance/submitfee')->with(['semester'=>$semester,'feelevel'=>$feelevel]);
    }
    public function savFee(Request $Request)
    {
        $this->validate($Request,[
          'semester'=>'required',
          'submittedFee'=>'required',
          'TotalFee'=>'required',
          'date'=>'required',
          'feeType'=>'required',
        ]);

        $fee= new fee();
        $fee->student_id = $Request->id;
        $fee->semester_id = $Request->semester;
        $fee->feeSubmitted = $Request->submittedFee;
        $fee->totalFee = $Request->TotalFee;
        $fee->defaults = $Request->default;
        $fee->submittedDate = $Request->date;
        $fee->level = $Request->feeType;
        $fee->save();
        return redirect('finance');
    }
    public function FeeRecord()
    {
$fee=fee::with('fee','fee.student','fee.department','fee.batch','type')->get();
return $fee;

        return view('finance/FeeRecord')->with('fee',$fee);
    }
    public function submit($id)
    {
        $fee=fee::where(['id'=>$id])->update(['defaults'=>0]);
return redirect('FeeRecord');
    }
}
