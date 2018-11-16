<?php

namespace App\Http\Controllers;
use App\alotKit;
use App\kit;
use Carbon\Carbon;
use App\Student;
use App\department;
use App\batch;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sportController extends Controller
{
    public function index()
    {
        return view('mainlayout.index');
    }
    public function kits()
    {
        $kits=kit::get();
        return view('sports.kit')->with('kits',$kits);
    }
    public function addKit()

    {

return view('sports.addKit');
    }
    public function saveKit(Request $Request)
    {
        $kit=new kit;
   $this->validate($Request,[
       'kit' => 'required',
       ]);
   $kit->kitName=$Request->kit;
   $kit->Available=$Request->available;
   $kit->Quatity=$Request->quantity;
   $kit->save();
   return redirect('kits');

    }
    public function deleteKit($id)
    {
       $kits=kit::where('id',$id)->delete();
        return redirect('kits')->with("status","Record Deleted SUccessfully");
    }
public function editKit($id)
{
    $kit=kit::where('id',$id)->first();
    return view('sports/editkit')->with('kit',$kit);
}
public function updateKit(Request $Request)

{
    $this->validate($Request,[
       'kit'=>'required',
    ]);
    $kit= kit::where('id',$Request->id)->update(['kitName'=>$Request->kit]);

    return redirect('kits');
}
public function StudentData()
{
$user=Student::with(['student','batch','department','issuekit'])->withCount('issuekit')->get();

return view('sports/StudentData')->with('user',$user);
}
public function IssueKit($id)
{
    $student=Student::where('id',$id);
    $kit=kit::where('Available','>',0)->get();
return view('sports/IssueKit')->with(['student' => $student, 'kit'=>$kit]);

}
public function alotKit(Request $Request)
{
    $this->validate($Request,[
       'KitName'=>'required',
        'date'=>'required',
    ]);
    $issuekit = new alotKit();
    $issuekit->student_id=$Request->id;
    $issuekit->kit_id=$Request->KitName;
    $issuekit->issueDate=$Request->date;

    $issuekit->save();

    if($issuekit) {
        $room = DB::table('kits')->decrement('Available');

        return redirect('StudentData');

    }

}
public function showKits($id)
{            $student = Student::with(['student', 'batch', 'department','issuekit'])->withCount('issuekit')->where('id',$id)->first();

$kits=DB::table('alot_kits')->select('kits.*','alot_kits.*')->join('kits','kits.id','alot_kits.kit_id')->get();
return view('sports/alotedKits')->with(['kits'=>$kits,'student'=>$student]);
   }

   public function returnKit($id)

{
$kitissue=alotKit::find($id);
$kitissue->status=1;
$kitissue->returnDate=Carbon::now();
    $kitissue->save();
    return redirect('/StudentData');
}
}
