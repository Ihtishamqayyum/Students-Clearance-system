@extends('mainlayout.index')
@section('content')

<form action="{{url('saveBatch')}}" method="post">
  <div class="form-group">
    <label for="email">Batch Name</label>
    <input type="text" name="batch" value="@yield('editBatch')" class="form-control" id="email">
       {{$errors->first('batch')}}
  </div>
  {{csrf_field()}}
 
 
  <button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection