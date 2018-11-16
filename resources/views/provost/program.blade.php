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
        <a href="{{url('addProgram')}}" class="btn btn-success">Add Program</a>
        <div class="well">

            <table class="table table-striped">
<thead>
<tr>
<th>program id</th>
<th>program name</th>
<th>Department name</th>
<th>Action</th>
</tr>
</thead>
@foreach($program as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->programName}}</td>
        <td>{{$value->program->departmentName}}</td>
        <td>

            <a href="{{url('deleteProgram')}}/{{$value->id}}" class="btn btn-xs btn-success">Delete</a>
            <a href="{{url('editProgram')}}/{{$value->id}}" class="btn btn-xs btn-success">Edit</a>
        </td>
    </tr>
@endforeach

        </table>
        </div>

    </div>
</div>

    @endsection