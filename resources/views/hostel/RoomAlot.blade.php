@extends('mainlayout/index')
@section('content')

    <div id="wrapper">
        <div class="content-main">

<form action="{{url('alotRoom')}}" method="post">
    {{csrf_field()}}
<div class="form-group">
    <label for room> Select Room</label>
    <select class="form-control" name="roomId">
        <option>Select room</option>
        @foreach($room as $value)
<option value="{{$value->id}}">{{$value->roomNumber}}</option>
        @endforeach
    </select>


</div>
    <div class="form-group">
        <select name="semester_id" class="form-control">
            <option value="">select Semester</option>
            @foreach($semester as $value)
                <option value="{{$value->id}}">{{$value->semName}}</option>
            @endforeach
        </select>

    </div>

    <input type="hidden" name="id" value="{{Request::segment(2)}}">
<div class="form-group">
    <button type="submit" class="btn btn-warning">Submit</button>
</div>
</form>
        </div>
    </div>
    @endsection