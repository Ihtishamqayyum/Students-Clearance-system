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

        <div class="content-main">
    <div id="wrapper">

		<a href="{{url('addBatch')}}" class="btn btn-primary">Add Batch</a>
<div class="well">
 <table class="table table-striped">
    <thead>
      <tr>
        <th>Batch Id</th>
        <th>Batch Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($batch as $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->batchName}}</td>
        <td><div class="btn btn-group">
        	<a href="{{url('deleteBatch')}}/{{$value->id}}" class="btn btn-warning">Delete</a>
        	<a href="{{url('editBatch')}}/{{$value->id}}" class="btn btn-primary">Edit</a>
        </div></td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
    </div>
    </div>

@endsection