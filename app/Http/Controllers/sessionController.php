<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\session;

class sessionController extends Controller
{
public function session(){
	$session=session::get();
	return view('admin.session')->with('session',$session);
}

    public  function addSession(){
        return view('admin/addSession');
    }
    public function saveSession(Request $Request){

$session=new session;
$this->validate($Request,[
'session'=>'required',
]);
        $session->sessionName=$Request->sessionName;
$session->save();
return redirect('session')->with('status','added');
    }
    public function deleteSession($id){

    	$session=session::where('sessionId',$id)->delete();
    	return redirect('session')->with('status','session deleted successfully');
    }
    public function editSession($id){

    	$session=session::where('id',$id)->first();
    	return view('admin/editSession')->with('session',$session);
    }
    public function updateSession(Request $Request){
$this->validate($Request,[
'session'=>'required',
]);
$session=session::where('id',$Request->id)->update(['sessionName'=>$Request->sessionName]);
return redirect('session');


    }

}