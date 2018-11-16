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
                    <th>Fine</th>
                    <th>Defaults</th>

                </tr>
                </thead>
                <tr>
                    @foreach($proctors as $proctor)
                    <td>{{$proctor->fine->student->name}}</td>
                    <td>{{$proctor->fine->department->departmentName}}</td>
                    <td>{{$proctor->fine->batch->batchName}}</td>
                    <td>{{$proctor->fine->program->programName}}</td>
                    <td>{{$proctor->fined}}</td>
                    <td>{{$proctor->RecievedFine}}</td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection