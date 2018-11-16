@extends('mainlayout.index')
@section('content')
<form action="{{url('saveBook')}}" method="post">
	{{csrf_field()}}
	<div class="form-group">
		<label for="addBook"> Book Name</label>
		<input type="text" name="bookName" class="form-control" placeholder="Enter Book Name">
		{{$errors->first('bookName')}}
	</div>
<div class="form-group">
		<label for="addBook"> Book Number</label>
		<input type="text" name="bookNumber" class="form-control" placeholder="Enter Book Number">
	</div>
<div class="form-group">



	<select name="department" class="form-control">

			<label for="department">Select Department</label>

	<option>Select Department</option>
		@foreach($department as $value)
		<option value="{{$value->id}}">{{$value->departmentName}}</option>
		@endforeach
	</select>


</div>
<div class="form-group">
	<button type="submit" class="btn btn-success" >Submit</button>
</div>
</form>

@endsection