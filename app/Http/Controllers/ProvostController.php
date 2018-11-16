<?php

namespace App\Http\Controllers;

use App\department;
use App\program;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
class ProvostController extends Controller
{
    public function index()
    {
        return view('mainlayout/index');

    }
    public function requests()
    {
        $user=User::where(['status'=>0])->get();
        return view('provost/requestUser')->with('user',$user);
    }
    public function verify($id)
    {
        $user=User::where(['id'=>$id])->update(['status'=>1]);
        return redirect('request')->with('message','User Verified Succcessfully');
    }
    public function deVerify($id)
    {
        $user=User::where(['id'=>$id])->delete();
        return redirect('request')->with('error','User Rejected');
    }
public function addExaminar()
{
    $department=department::get();
    return view('provost/addExaminar')->with('department',$department);
}

}
