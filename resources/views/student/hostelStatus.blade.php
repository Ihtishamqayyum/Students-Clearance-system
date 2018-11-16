@extends('mainlayout.index')
@section('content')
    <div id="wrapper">
        <div class="content-main">
            <div class="well">
                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Batch</th>
                        <th>Program</th>
                        <th>Room Number</th>
                        <th>Semester</th>
                        <th>Fee Submitted</th>
                        <th>Total Fee</th>
                        <th>Defaults</th>
                    </tr>
                    <tr>
                        @foreach($rooms as $room)
                            <td>{{$room->student->student->name}}</td>
                            <td>{{$room->student->department->departmentName}}</td>
                            <td>{{$room->student->batch->batchName}}</td>
                            <td>{{$room->student->program->programName}}</td>
                            <td>{{$room->room->roomNumber}}</td>
                            <td>{{$room->semester->semName}}</td>
                            <td>{{$room->fee->feeSubmitted}}</td>
                            <td>{{$room->fee->totalFee}}</td>
                            <td>{{$room->fee->defaults}}</td>
                    </tr>
                    @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>

@endsection