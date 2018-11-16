@extends('mainlayout.index')
@section('content')
    <div id="wrapper">
        <div class="content-main">

            <div class="validation-system">

                <div class="validation-form">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                 @endif

            <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Department</th>
                            <th>Batch</th>
                            <th>Roll Number</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($student as $value)
                            <tr>
                                <td>{{$value->student->name}}</td>
                                <td>{{$value->department->departmentName}}</td>
                                <td>{{$value->batch->batchName}}</td>
                                <td>{{$value->rollNo}}</td>
                                <td>{{$value->address}}</td>


                                <td>
                                    <div class="btn btn-group-xs">
                                        <a href="{{url('RoomAlot')}}/{{$value->id}}" class="btn btn-xs btn-primary">Alot Room</a>

                                        <a href="{{url('ShowHostelRecord')}}/{{$value->id}}" class="btn btn-xs btn-warning">Hostel Record</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    @endsection