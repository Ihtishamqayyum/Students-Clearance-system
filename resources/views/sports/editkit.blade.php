@extends('mainlayout.index')
@section('content')

    <form action="{{url('updateKit')}}" method="post">
        <div class="form-group">
            <label for="email">Kit Name</label>
            <input type="text" name="kit" value="{{$kit->kitName}}" class="form-control">
        </div>
        <div class="form-group">
            <input type="hidden" value="{{$kit->id}}" name="id">
        </div>
        {{csrf_field()}}


        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

@endsection