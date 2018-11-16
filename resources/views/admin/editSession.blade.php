@extends('mainlayout.index')
@section('content')

<form action="{{url('updateSession')}}" method="post">
	{{csrf_field()}}
  <div class="form-group">
    <label for="email">session Name</label>
    <input type="text" name="session" value="{{$session->sessionName}}" class="form-control">
  </div>
    <div class="form-group">
    	<input type="hidden" value="{{$session->sessionId}}" name="id">
  </div>
  
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection