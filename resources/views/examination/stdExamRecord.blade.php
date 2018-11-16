@extends('mainlayout.index')
@section('content')
<div class="wrapper">
    <div class="content-main">

        <table class="table table-responsive">
            <thead>
            <tr>
                <td>Student name</td>
                <td>Departmnent</td>
                <td>Batch</td>
                <td>Program</td>
                <td>Action</td>
            </tr>

            </thead>
            <tr>
                @foreach($student as $value)
                    <td>{{$value->student->name}}</td>
                    <td>{{$value->department->departmentName}}</td>
                    <td>{{$value->batch->batchName}}</td>
                    <td>{{$value->program->programName}}</td>
                    <td><a href="{{url('marks')}}/{{$value->id}}" class="btn btn-xs btn-warning">Subject details</a> </td>
            </tr>
            @endforeach
        </table>


    </div>
</div>

    @endsection