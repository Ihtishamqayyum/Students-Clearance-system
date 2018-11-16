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
                    <div class="thumbnail">

                        <h3>Name:{{$student->student->name}}</h3>
                        <h3>Department:{{$student->department->departmentName}}</h3>
                        <h3>Total books:{{$student->kits_count_count}}</h3>
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Kit Name</th>

                            <th>IssueDate</th>
                            <th>Return Date</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kits as $value)
                            <tr>
                                <td>{{$value->kitName}}</td>

                                <td>{{$value->issueDate}}</td>
                                <td>{{$value->ReturnDate}}</td>


                                <td>
                                    <div class="btn btn-group-xs">
                                        @if($value->status==0)
                                            <a href="{{url('return-kit')}}/{{$value->id}}" class="btn btn-xs btn-primary">return kit</a>
                                        @else
                                            <a href="javascript:void(0)" class="btn btn-xs btn-primary">kit Returned</a>
                                        @endif



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
@endsection()