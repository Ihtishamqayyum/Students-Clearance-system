@extends('mainlayout.index')
@section('content')
    <div id="wrapper">
        <div class="content-main">
            <div class="well">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Batch</th>
                    <th>Program</th>
                    <th>Semester</th>
                    <th>Fee Submitted</th>
                    <th>Total Fee</th>
                    <th>Defaults</th>
                    </tr>
                    </thead>
                    <tr>
                        @foreach($fees as $fee)
                        <td>{{$fee->semesterfee->student->name}}</td>
                        <td>{{$fee->semesterfee->department->departmentName}}</td>
                        <td>{{$fee->semesterfee->batch->batchName}}</td>
                        <td>{{$fee->semesterfee->program->programName}}</td>
                        <td>{{$fee->semester->semName}}</td>
                        <td>{{$fee->feeSubmitted}}</td>
                        <td>{{$fee->totalFee}}</td>
                        <td>{{$fee->defaults}}</td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


    @endsection