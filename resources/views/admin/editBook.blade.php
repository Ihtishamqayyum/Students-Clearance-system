@extends('mainlayout.index')
@section('content')
<form action="{{url('updateBook')}}" method="post">
	{{csrf_field()}}
	<div class="form-group">
		<label for="addBook"> Book Name</label>
		<input type="text" name="bookName" class="form-control" placeholder="Enter Book Name" value="{{$book->bookName}}">
	</div>
<div class="form-group">
		<label for="addBook"> Book Number</label>
		<input type="text" name="bookNumber" class="form-control" placeholder="Enter Book Number" value="{{$book->bookNumber}}">
	</div>

	<div class="form-group">

		<input type="hidden" name="id" class="form-control" value="{{$book->id}}">

	</div>
<div class="form-group">
	<button type="submit" class="btn btn-success" >Submit</button>
</div>
</form>

@endsection