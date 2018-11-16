@extends('mainlayout.index')
@section('content')
    <div class="validation-form">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif

    <div class="wrapper">
    <div class="content-main">
        <div class="well">
<a href="{{url('addsubjects')}}" class="btn btn-danger">Add Subject</a>
       <table class="table table-danger">
            <thead>
            <tr>
                <td>id</td>
                <td>Name</td>
                <td>Department</td>
                <td>Program</td>
                <td>Semester</td>
                <td>Action </td>
            </tr>

            </thead>
<tr>
    @foreach($subject as $value)
    <td>{{$value->id}}</td>
    <td>{{$value->subjectName}}</td>
    <td>{{$value->department->departmentName}}</td>
    <td>{{$value->program->programName}}</td>
    <td>{{$value->semester->semName}}</td>
        <td>
            <a href="{{url('deletesubject')}}/{{$value->id}}" class="btn btn-xs btn-danger">Delete</a>
            <a href="{{url('editsubject')}}/{{$value->id}}" class="btn btn-xs btn-danger">Edit</a>
        </td>

</tr>
           @endforeach
        </table>
    </div>
    </div>
</div>
    @endsection