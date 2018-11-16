<?php

namespace App\Http\Controllers;

use App\Http\Requests\batchRequest;
use Illuminate\Http\Request;
use App\batch;
use Session;
class batchController extends Controller
{
     
    public function batch(){
    	$batch=batch::get();

    	return view('admin.batch')->with('batch',$batch);
    }

    public  function addBatch(){
        return view('admin/addBatch');
    }
    public function saveBatch(batchRequest $Request)
    {
    	$batch=new batch();
    /*	$this->validate($Request,[
'batch'=>'required',
    	]);
    */
        $batch->batchName=$Request->batch;
        $batch->save();
        return redirect('batch')->with('message','batch Added Successfully');

    }
    public function deleteBatch($id){
    	$batch=batch::where('id',$id)->delete();
    	return redirect('batch')->with('message','Batch deleted Successfully');
    }
    public function editBatch($id){
    	$batch=batch::where('id',$id)->first();
    	return view('admin/editBatch')->with('batch',$batch);


    }
    public function updateBatch(Request $Request){
    	// dd($Request->id);
   		
    	$this->validate($Request,
    		['batch'=>'required']);
        $batch= batch::where('id',$Request->id)->update(['batchName'=>$Request->batch]);
        Session::flash('message', "update success");
        return redirect('batch');
        


    }
}
