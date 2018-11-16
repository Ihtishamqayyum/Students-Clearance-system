@extends('mainlayout.index')
@section('content')
<div class="row">

<div class="col-md-6" >
	<a href="{{url('addSession')}}" class="btn btn-success">Add Session</a>

</div>
</div>
<div class="well">

<table class="table table-striped">
    <thead>
      <tr>
        <th>Session Id</th>
        <th>Session Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
 
      <tr>
      	@foreach($session as $value)
        <td>{{$value->id}}</td>
        <td>{{$value->sessionName}}</td>
        <td><div class="btn btn-group">
        	<a href="{{url('deleteSession')}}/{{$value->id}}" class="btn btn-warning">Delete</a>
        	<a href="{{url('editSession')}}/{{$value->id}}" class="btn btn-primary">Edit</a>
        </div></td>

      </tr>
      @endforeach
      
 </tbody>
</table>
	</div>
@endsection