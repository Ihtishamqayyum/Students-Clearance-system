<?php

namespace App\Http\Controllers;

use App\busAlot;
use App\busAvailable;
use App\fee;
use App\semester;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class transportController extends Controller
{
    public function index()
    {
        return view('transport/transport');
    }
    public function bus()
    {
        $bus=busAvailable::get();

return view('transport/bus')->with('bus',$bus);

    }
    public function alotBus()

    {
return view('transport/Addbus');
    }
    public function addbus(Request $Request)

    {
$bus=new busAvailable;

$bus->busNumber=$Request->busNumber;
$bus->busStop=$Request->BusStop;
$bus->capacity=$Request->capacity;
$bus->Seats=$Request->space_avail;
$bus->save();
return redirect('bus');

    }
    public function deleteBus($id)
    {
        $bus=busAvailable::where('id',$id)->delete();
return redirect('bus');

    }
    public function editBus($id)
    {
        $edit=busAvailable::where('id',$id)->first();
        return view('transport/editBus')->with('edit',$edit);
    }
    public function updateBus(Request $Request)

    {

        $update=busAvailable::where('id',$Request->id)->update(['busNumber'=>$Request->busNumber,'busStop'=>$Request->BusStop]);
        return redirect('bus');
    }
    public function StudentsDATA()
    {
        $student=Student::with('student','batch','department')->get();

        return view('transport/StudentsDATA')->with('student',$student);
    }
    public function busAloted($id)
    {
        $bus=busAvailable::where('Seats','>',0)->get();
        $semester=semester::get();


        return view ('transport/busAloted')->with(['bus'=>$bus,'semester'=>$semester]);
    }
    public function bustostudent(Request $Request)
    {

        $bus = new busAlot;
        $fee = fee::where(['student_id' => $Request->id, 'level' => '2', 'semester_id' => $Request->semester_id])->count();
        if ($fee > 0) {
            $bus->student_id = $Request->id;
            $bus->bus_id = $Request->busId;
            $bus->semester_id = $Request->semester_id;
            $bus->save();
            if($bus)
            {
             $bus=DB::table('bus_availables')->decrement('Seats');

            return redirect('StudentsDATA')->with('message', 'Bus has been  alloted');
            }
        } else {
            return redirect('StudentsDATA')->with('message', ' Please Submit fee');
        }
    }
        public function  showRecord($id)
    {
$student=Student::with('student','department','batch')->where('id',$id)->first();

$bus= DB::table('bus_alots')->select('bus_availables.*','bus_alots.*','semesters.*','students.*')
    ->join('bus_availables','bus_availables.id','bus_alots.bus_id')
    ->join('semesters','semesters.id','bus_alots.semester_id')
    ->join('students','students.id','bus_alots.student_id')->where('students.id',$id)->get();

return view('transport/showRecord')->with(['bus'=>$bus,'student'=>$student]);
    }

public function TransportRecord()
{
$bus=busAlot::with('busAlot','busAlot.student','busAlot.department','busAlot.batch','btype','semester')->get();
return $bus;
}
}
