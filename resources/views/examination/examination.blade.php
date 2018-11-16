@extends('mainlayout.index')
@section('content')
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
    </div>
        <div class="wrapper">
        <div class="content-main">

            <div class="well">

                <table class="table table-danger">
                    <thead>
                    <tr>
                        <td> Name</td>
                        <td>Department</td>
                        <td>batch</td>
                        <td>program</td>
                        <td>Subject</td>
                        <td>Marks</td>
                        <td>Total marks</td>
                        <td>remarks</td>
                        <td>Attempts</td>
                        <td>Action</td>
                    </tr>
                    <tr>
                        @foreach($exam as $value)

                        <td>{{$value->student->student->name}}</td>
                        <td>{{$value->student->department->departmentName}}</td>
                        <td>{{$value->student->batch->batchName}}</td>
                        <td>{{$value->student->program->programName}}</td>
                        <td>{{$value->subject->subjectName}}</td>
                        <td>{{$value->marks}}</td>
                        <td>{{$value->totalMarks}}</td>
                        <td>{{$value->remarks}}</td>
                        <td>{{$value->attempts}}</td>

                        <td>
                            <a href="{{url('failpaper')}}/{{$value->id}}" class="btn btn-xs btn-danger">Reappear</a>
                        <a href="{{url('reapearFee')}}/{{$value->student->id}}" class="btn btn-xs btn-danger">Reapear Fee</a>
                        </td>
                    </tr>
                    @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
    @endsection