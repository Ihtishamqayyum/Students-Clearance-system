@extends('mainlayout.index')
@section('content')
    <div id="wrapper">
        <div class="content-main">
            <div class="well">
                <table class="table table-danger">
                    <thead>
                    <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Batch</th>
                    <th>Program</th>
                    <th>Kit Name</th>
                    <th>IssueDate</th>
                    <th>Return Date</th>
                    </tr></thead>
                    <tr>
                        @foreach($kits as $kit)
                        <td>{{$kit->student->student->name}}</td>
                        <td>{{$kit->student->department->departmentName}}</td>
                        <td>{{$kit->student->batch->batchName}}</td>
                        <td>{{$kit->student->program->programName}}</td>
                        <td> {{$kit->kits->kitName}}</td>
                        <td> {{$kit->issueDate}}</td>
                            @if($kit->ReturnDate==NULL)
                                <td>{{'Not Retured'}}</td>

                            @else
                                <td>{{$kit->ReturnDate}}</td>



                                {{--@endelseif--}}
                            @endif
                        <td></td>
                        <td></td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection