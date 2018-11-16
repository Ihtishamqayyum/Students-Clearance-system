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

        <div class="row"><div class="col-sm-12">
	<div class="col-md-6" style="width:50%;margin:auto;margin-bottom: 2%;">
		<a href="{{url('addBook')}}" class="btn btn-primary">Add Book</a>
	</div>
</div>
<div class="well">
 <table class="table table-striped">
    <thead>
      <tr>
        <th>Book Id</th>
        <th>Book Name</th>
        <th>Book Number</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($book as $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->bookName}}</td>
        <td>{{$value->bookNumber}}</td>
        
        <td><div class="btn btn-group">
        	<a href="{{url('deleteBook')}}/{{$value->id}}" class="btn btn-warning">Delete</a>
        	<a href="{{url('editBook')}}/{{$value->id}}" class="btn btn-primary">Edit</a>
        </div></td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div>

@endsection