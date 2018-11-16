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
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Bus Number</th>
                            <th>Bus Stop</th>
                            <th>Semester</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                @foreach($bus as $value)
                                <td>{{$value->busNumber }}</td>
                                <td>{{$value->busStop}}</td>
                                <td>{{$value->semName}}</td>




                                <td>
                                    <div class="btn btn-group-xs">

                                        <a href="{{url('fine')}}" class="btn btn-warning">OK</a>
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
@endsection