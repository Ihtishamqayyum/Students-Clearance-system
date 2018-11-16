@extends('mainlayout.index')
@section('content')

<form action="{{url('saveSession')}}" method="post">
	{{csrf_field()}}
	<div class="form-group">
		<label for="Session">Session Name</label>
		<input type="text" name="sessionName" class="form-control">

	</div>
	<button type="submit" class="btn btn-info">Submit</button>
	


</form>

@endsection