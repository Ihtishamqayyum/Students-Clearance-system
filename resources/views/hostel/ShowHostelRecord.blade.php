@extends('mainlayout.index')
@section('content')
    <div class="wrapper">
        <div class="content-main">
            <table class="table table-responsive">
                <thead>
<tr>
                <th>Room id</th>
                <th>Room Number</th>
                <th>Semester</th>
                <th>Aloted Date</th>
                <th>Discharge Date</th>
                <th>Action</th>
                </thead>
                </tr>
                <tr>
                    @foreach($student as $value)
                        <td>{{$value->id}}</td>
                        <td>{{$value->roomNumber}}</td>
                        <td>{{$value->semName}}</td>
                        <td>{{$value->created_at}}</td>
                        <td></td>
                        <td>
                            <a href="{{url('return')}}" class="btn btn-xs btn-warning">discharge</a>


                        </td>
                        @endforeach
                </tr>
            </table>





        </div>
    </div>


    @endsection