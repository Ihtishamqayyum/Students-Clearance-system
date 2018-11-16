@extends('mainlayout.index')
@section('content')

<form action="{{url('saveDepartment')}}" method="post">
  <div class="form-group">
    <label for="email">Department Name</label>
    <input type="text" name="department" class="form-control" id="email">
    {{$errors->first('department')}}
  </div>
  {{csrf_field()}}
 
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>

@endsection