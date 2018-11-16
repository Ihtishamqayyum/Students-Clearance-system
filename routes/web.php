<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware'=>'auth'],function(){
    Route::group(['middleware'=>'student'],function(){
    Route::get('student','StudentController@index');
        Route::get('completeprofile','StudentController@completeprofile');
        Route::post('savestudent','StudentController@savestudent');
        Route::get('libraryStatus','StudentController@libraryStatus');
        Route::get('transportStatus','StudentController@transportStatus');
        Route::get('sportStatus','StudentController@sportStatus');
        Route::get('hostelStatus','StudentController@hostelStatus');
        Route::get('financeStatus','StudentController@financeStatus');
        Route::get('proctorStatus','StudentController@proctorStatus');
        Route::get('examination','StudentController@examination');
    });

});
Route::group(['middleware' =>'auth'],function(){
    Route::group(['middleware'=>'provost'],function(){
        Route::get('provost','ProvostController@index');
        Route::get('request','ProvostController@requests');
        Route::get('verify/{id}','ProvostController@verify');
        Route::get('de-verify/{id}','ProvostController@deVerify');
        Route::get('/department','HomeController@store');
        Route::get('addDepartment','HomeController@addDepartment');
        Route::post('saveDepartment','HomeController@saveDepartment');
        Route::get('delete/{id}','HomeController@deleteDepartment');
        Route::get('edit/{id}','HomeController@editDepartment');
        Route::post('updateDepartment','HomeController@updateDepartment');
        Route::get('batch','batchController@batch');
        Route::get('addBatch','batchController@addBatch');
        Route::post('saveBatch','batchController@saveBatch');
        Route::get('deleteBatch/{id}','batchController@deleteBatch');
        Route::get('editBatch/{id}','batchController@editBatch');
        Route::post('updateBatch','batchController@updateBatch');
        Route::get('session','sessionController@session');
        Route::get('addSession','sessionController@addSession');
        Route::post('saveSession','sessionController@saveSession');
        Route::get('deleteSession/{id}','sessionController@deleteSession');
        Route::get('editSession/{id}','sessionController@editSession');
        Route::post('updateSession','sessionController@updateSession');
        Route::get('program','HomeController@program');
        Route::get('deleteProgram/{id}','HomeController@deleteProgram');
        Route::get('addProgram','HomeController@addProgram');
        Route::post('saveProgram','HomeController@saveProgram');
        Route::get('editProgram/{id}','HomeController@editProgram');
        Route::post('updateProgram','HomeController@updateProgram');
        Route::get('subject','HomeController@subject');
        Route::get('addsubjects','HomeController@addsubjects');
        Route::post('savesubject','HomeController@savesubject');
        Route::get('deletesubject/{id}','HomeController@deletesubject');
        Route::get('editsubject/{id}','HomeController@editsubject');
        Route::post('updatesubject/{id}','HomeController@updatesubject');
    });
});
Route::group(['middleware' =>'auth'],function(){
    Route::group(['middleware'=>'finance'],function(){
        Route::get('finance','financeController@index');
        Route::get('submitFee/{id}','financeController@submitFee');
        Route::post('savFee','financeController@savFee');
        Route::get('FeeRecord','financeController@FeeRecord');
        Route::get('submit/{id}','financeController@submit');
    });
});
Route::group(['middleware' =>'auth'],function(){
    Route::group(['middleware' =>'library'],function(){
        Route::get('library','libraryController@index');
        Route::get('book','libraryController@book');
        Route::get('addBook','libraryController@addBook');
        Route::post('saveBook','libraryController@saveBook');
        Route::get('deleteBook/{id}','libraryController@deleteBook');
        Route::get('editBook/{id}','libraryController@editBook');
        Route::post('updateBook','libraryController@updateBook');
        Route::get('studentsRecord','libraryController@studentsRecord');
        Route::get('bookIssue/{id}','libraryController@bookIssue');
        Route::post('issueBook','libraryController@issueBook');
        Route::get('show-books/{id}','libraryController@showBook');
        Route::get('return-book/{id}','libraryController@returnBook');
        Route::get('LibraryRecord','libraryController@LibraryRecord');
    });
});
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>'auth'],function (){
   Route::group(['middleware' =>'transport'],function (){
     Route::get('transport','transportController@index');
     Route::get('bus','transportController@bus');
     Route::get('AddBus','transportController@alotBus');
     Route::post('addbus','transportController@addbus');
     Route::get('deleteBus/{id}','transportController@deleteBus');
    Route::get('editBus/{id}','transportController@editBus');
    Route::post('updateBus','transportController@updateBus');
    Route::get('StudentsDATA','transportController@StudentsDATA');
    Route::get('busAloted/{id}','transportController@busAloted');
    Route::post('bustostudent','transportController@bustostudent');
    Route::get('showRecord/{id}','transportController@showRecord');
   Route::get('TransportRecord','transportController@TransportRecord');
   });
});
Route::group(['middleware'=>'auth'],function()
{
   Route::group(['middleware'=>'hostel'],function ()
   {
       Route::get('hostel','HostelController@index');
       Route::get('AllStudents','HostelController@AllStudents');
       Route::get('room','HostelController@room');
       Route::get('addRoom','HostelController@addRoom');
       Route::post('saveRoom','HostelController@saveRoom');
       Route::get('deleteRoom/{id}','HostelController@deleteRoom');
       Route::get('editRoom/{id}','HostelController@editRoom');
       Route::post('UpdateRoom','HostelController@UpdateRoom');
       Route::get('RoomAlot/{id}','HostelController@RoomAlot');
       Route::post('alotRoom','HostelController@alotRoom');
       Route::get('ShowHostelRecord/{id}','HostelController@ShowHostelRecord');
       Route::get('hostelRecord','HostelController@hostelRecord');

   }) ;
});
Route::group(['middleware'=>'auth'],function ()
{
   Route::group(['middleware'=>'sports'],function ()
   {
      Route::get('sports','SportController@index');
      Route::get('kits','SportController@kits');
      Route::get('addKit','SportController@addKit');
      Route::post('saveKit','SportController@saveKit');
       Route::get('deleteKit/{id}','SportController@deleteKit');
       Route::get('editKit/{id}','SportController@editKit');
       Route::post('updateKit','SportController@updateKit');
      Route::get('StudentData','SportController@StudentData');
      Route::get('IssueKit/{id}','SportController@IssueKit');
      Route::post('alotKit','SportController@alotKit');
      Route::get('showKits/{id}','SportController@showKits');
      Route::get('return-kit/{id}','SportController@returnKit');
   });
});
Route::group(['middlewaare'=>'auth'],function ()
{
    Route::group(['middleware'=>'departmental'],function(){

       Route::get('departmental','departmentalController@index');
        Route::post('ChooseDepartment','departmentalController@ChooseDepartment');
        Route::get('stdExamRecord','departmentalController@stdExamRecord');
        Route::get('subjects','departmentalController@subjects');
       Route::get('marks/{id}','departmentalController@marks');
       Route::post('savemarks','departmentalController@savemarks');
       Route::get('examinationRecord','departmentalController@examinationRecord');
       Route::get('failpaper/{id}','departmentalController@failpaper');
       Route::post('updatemarks/{id}','departmentalController@updatemarks');
       Route::get('reapearFee/{id}','departmentalController@reapearFee');
       Route::post('saveFee','departmentalController@saveFee');
    });
});
Route::group(['middleware'=>'auth'],function(){
   Route::group(['middleware'=>'proctor'],function(){
     Route::get('proctor','proctorController@index');
     Route::get('std','proctorController@proctor');
     Route::get('fine/{id}','proctorController@fine');
Route::post('fined','proctorController@fined');
Route::get('stdRecord','proctorController@stdRecord');
Route::get('SubmitFine/{id}','proctorController@SubmitFine');
   });
});
