@extends('mainlayout.index')
@section('content')
<div class="flex-md-wrap">
    <div class="content-main">

        <table class="table table-responsive">
            <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Batch</th>
                <th>Program</th>
                <th>Roll Number</th>

            </tr>
            </thead>
            @foreach($student as $value)
            <tr>

    <td>{{$value->student->name}}</td>
    <td>{{$value->department->departmentName}}</td>
    <td>{{$value->batch->batchName}}</td>
    <td>{{$value->program->programName}}</td>
    <td>{{$value->rollNo}}</td>
                <td>
                    <a href="{{url('fine')}}/{{$value->id}}" class="btn btn-xs btn-success">Fine Student</a>
                    <a href="{{url('SubmitFine')}}/{{$value->id}}" class="btn btn-xs btn-success">Recieve Fine</a>

                </td>
        @endforeach

</tr>

        </table>

    </div>
</div>

    @endsection