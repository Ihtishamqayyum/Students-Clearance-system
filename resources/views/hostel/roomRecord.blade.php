@extends('mainlayout.index')
@section('content')
    <div id="wrapper">
        <div class="content-main">
<a href="addRoom" class="btn btn-success">Add Room</a>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Room Id</th>
        <th>Room Number</th>
        <th>Room Capacity</th>
        <th>Available space</th>
        <th>Action</th>

    </tr>
    </thead>
    <tr>
        @foreach($room as $value)
        <td>{{$value->id}}</td>
        <td>{{$value->roomNumber}}</td>
        <td>{{$value->Capacity}}</td>
        <td>{{$value->AvailableSeats}}</td>

        <td><a href="{{url('deleteRoom')}}/{{$value->id}}" class="btn btn-xs btn-success">Delete </a>
        <a href="{{url('editRoom')}}/{{$value->id}}" class="btn btn-xs btn-success">Edit</a> </td>

    </tr>
    @endforeach
</table>

        </div>
    </div>
@endsection