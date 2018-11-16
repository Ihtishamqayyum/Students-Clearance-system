@extends('mainlayout.index')
@section('content')
    <div class="wrapper">

        <div class="content-main">

            <table class="table table-responsive">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Department</td>
                    <td>Batch</td>
                    <td>Fine</td>
                    <td>Defaults</td>
                    <td>Action</td>
                </tr>
                </thead>
                @foreach($student as $value)
                    <tr>
                        <td>{{$value->std->student->name}}</td>
                        <td>{{$value->std->department->departmentName}}</td>
                        <td>{{$value->std->batch->batchName}}</td>
                        <td>{{$value->fined }}</td>
                        <td>{{$value->RecievedFine}}</td>
                        <td>
                            <a href="{{url('SubmitFine')}}/{{$value->id}}" class="btn btn-xs btn-success">Submit Fine</a>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>

    @endsection