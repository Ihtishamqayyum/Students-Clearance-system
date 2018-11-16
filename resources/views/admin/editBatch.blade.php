@extends('mainlayout.index')
@section('content')


<form action="{{url('updateBatch')}}" method="post">
	{{csrf_field()}}
  <div class="form-group">
    <label for="email">Batch Name</label>
    <input type="text" name="batch" value="{{$batch->batchName}}" class="form-control">
  </div>
    <div class="form-group">
    	<input type="hidden" value="{{$batch->batchId}}" name="id">
  </div>
  
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection