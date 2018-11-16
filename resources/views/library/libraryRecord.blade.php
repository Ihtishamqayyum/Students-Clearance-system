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
                        <th>Book Name</th>
                        <th>Issue Date</th>
                        <th>Return Date</th>
                        <th>Fine</th>
                    </tr>

                    <tr>
                        @foreach($bookissue as $value)
                            <td>{{$value->student->student->name}}</td>
                            <td>{{$value->student->department->departmentName}}</td>
                            <td>{{$value->student->batch->batchName}}</td>
                            <td>{{$value->student->program->programName}}</td>

                            <td>{{$value->book->bookName}}</td>
                            <td>{{$value->issueDate}}</td>

                            @if($value->returnDate==NULL)
                                <td>{{'Not Retured'}}</td>
                            @else
                                <td>{{$value->returnDate}}</td>
                            @endif
                    </tr>

                    @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>


@endsection