<?php

namespace App\Http\Controllers;

use App\fee;
use App\rAlot;
use App\room;
use App\semester;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HostelController extends Controller
{
    public function index()
    {
        return view('mainlayout/index');
    }
    public function AllStudents()
    {
        $student=Student::with('student','department','batch')->get();
        return view('hostel/hostel')->with('student',$student);
    }
    public function room()
    {
$room=room::get();
return view('hostel/roomRecord')->with('room',$room);
    }
    public function addRoom()
    {
        return view('hostel/addRoom');
    }
            public function saveRoom(Request $request)
    {
        /*$this->validate($request,[
            'roomNumber'=>'required',
            'Capacity'=>'required',
            'AvailableSeats'=>'required',
        ]);*/
$room=new room();
$room->roomNumber=$request->room_number;
$room->Capacity=$request->capacity;
$room->AvailableSeats=$request->space_avail;
$room->save();
return redirect('room');
    }
    public function deleteRoom($id)
    {
        $room=room::where('id',$id)->delete();
        return redirect('room');

    }
    public function editRoom($id)
    {
        $room=room::where('id',$id)->first();
        return view('hostel/editRoom')->with('room',$room);
    }
    public function UpdateRoom(Request $request)
    {
        $this->validate($request,
            [
           'roomNumber'=>$request->room_number,
                'Capacity'=>$request->capacity,

        ]);
        $update=room::where('id',$request->id)->update(['roomNumber'=>$request->room_number,'Capacity'=>$request->capacity,'AvailableSeats'=>$request->space_avail]);

        return redirect('room');


    }
    public function RoomAlot($id)
    {

$room=room::where('AvailableSeats','>',0)->get();

$semester=semester::get();

        return view('hostel/RoomAlot')->with(['room'=>$room,'semester'=>$semester]);



    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function alotRoom(Request $request)
    {
$fee=fee::where(['student_id'=>$request->id,'level'=>'3','semester_id'=>$request->semester_id])->count();
if($fee>0) {
    $rAlot = new rAlot();
    $rAlot->student_id = $request->id;
    $rAlot->room_id = $request->roomId;
    $rAlot->semester_id=$request->semester_id;
    $rAlot->save();

    if ($rAlot) {
        $room = DB::table('rooms')->decrement('AvailableSeats');
        return redirect('AllStudents')->with('message','Room Aloted');

    }
}
else
    {
        return redirect('AllStudents')->with('message','Please Submit Hostel Fee');
    }


        return redirect('AllStudents');
    }
    public function ShowHostelRecord($id)
    {

        $student=DB::table('r_alots')
            ->select('rooms.*','r_alots.*','students.*','semesters.*')
            ->join('rooms','rooms.id','r_alots.room_id')
            ->join('students','students.id','r_alots.student_id')
            ->join('semesters','semesters.id','r_alots.semester_id')
            ->where('students.id',$id)->get();

        return view('hostel/ShowHostelRecord')->with(['student'=>$student]);
    }
    public function hostelRecord()
    {
$user=DB::table('users')
    ->select('students.*','fees.*','fee_types.*','users.*','departments.*','batches.*','semesters.*','programs.*')

    ->join('students','Users.id','students.userId')
    ->join('departments','departments.id','students.depId')
    ->join('batches','batches.id','students.batchId')
    ->join('fees','fees.student_id','students.id')
    ->join('fee_types','fee_types.id','fees.level')
    ->join('semesters','semesters.id','fees.semester_id')
    ->join('programs','programs.id','students.programId')
    ->where('level','3')
    ->get();
return($user);


/*
        $fee=DB::table('fees')
            ->select('students.*','semesters.*','fees.*')
            ->join('students','students.id','fees.student_id')
            ->join('semesters','semesters.id','fees.semester_id')

            ->where('level','2')->get();
     return($fee);*/
        return view('hostel.hostelRecord')->with('user',$user);
    }

}
