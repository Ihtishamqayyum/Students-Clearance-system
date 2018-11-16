@extends('mainlayout.index')
@section('content')
    <div class="content-main">
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

            <div id="wrapper">

                <a href="{{url('addDepartment')}}" class="btn btn-primary">Add Department</a>

<div class="well">
 <table class="table table-striped">
    <thead>
      <tr>
        <th>Department Id</th>
        <th>Department Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($department as $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->departmentName}}</td>
        <td><div class="btn btn-group">
        	<a href="{{url('delete')}}/{{$value->id}}" class="btn btn-warning">Delete</a>
        	<a href="{{url('edit')}}/{{$value->id}}" class="btn btn-primary">Edit</a>
        </div></td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
        </div>
    </div>
@endsection