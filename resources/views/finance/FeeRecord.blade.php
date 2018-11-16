@extends('mainlayout.index')
@section('content')
<div class="wrapper">
    <div class="content-main">

        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Batch</th>

                <th>Roll Number</th>
                <th>Fee Submitted</th>
                <th>Defaults</th>
                <th>Submission Date</th>
                <th>Fee Level</th>
                <th>Action</th>
            </tr>
            </thead>
            @foreach($fee as $value)
<tr>

    <td>{{$value->fee->student->name}}</td>
    <td>{{$value->fee->department->departmentName}}</td>
    <td>{{$value->fee->batch->batchName}}</td>
    <td>{{$value->fee->rollNo}}</td>
    <td>{{$value->feeSubmitted}}</td>
    <td>{{$value->defaults}}</td>
    <td>{{$value->submittedDate}}</td>
    <td>{{$value->type->FeeType}}</td>
     <td>
         <a href="{{url('submit')}}/{{$value->id}}" class="btn btn-xs btn-warning">Submit defaults</a>
     </td>

        @endforeach
</tr>



        </table>


    </div>
</div>

    @endsection