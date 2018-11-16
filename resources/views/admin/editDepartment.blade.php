@extends('mainlayout.index')
@section('content')

<form action="{{url('updateDepartment')}}" method="post">
  <div class="form-group">
    <label for="email">Department Name</label>
    <input type="text" name="department" value="{{$department->departmentName}}" class="form-control">
    </div>
    <div class="form-group">
    	<input type="hidden" value="{{$department->depId}}" name="id">
  </div>
  {{csrf_field()}}
 
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>

@endsection