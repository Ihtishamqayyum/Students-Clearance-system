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
                    <th>Bus Number</th>
                    <th>Semester</th>
                    <th>Fee Submitted</th>
                    <th>Total Fee</th>
                    <th>Defaults</th>
                </tr>
                <tr>
                    @foreach($bus as $value)
                    <td>{{$value->student->student->name}}</td>
                    <td>{{$value->student->department->departmentName}}</td>
                    <td>{{$value->student->batch->batchName}}</td>
                    <td>{{$value->student->program->programName}}</td>
                    <td>{{$value->bus->busNumber}}</td>
                    <td>{{$value->semester->semName}}</td>
                    <td>{{$value->fee->feeSubmitted}}</td>
                    <td>{{$value->fee->totalFee}}</td>
                    <td>{{$value->fee->defaults}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection