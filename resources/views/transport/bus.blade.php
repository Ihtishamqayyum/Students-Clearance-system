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
                        <a href="AddBus" class="btn btn-success">Add Buss</a>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Bus id</th>
                            <th>Bus Number</th>
                            <th>Bus Stop</th>
                            <th>Bus Capacity</th>
                            <th>seats availables</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                       @foreach($bus as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->busNumber}}</td>
                                <td>{{$value->busStop}}</td>
                                <td>{{$value->capacity}}</td>
                                <td>{{$value->Seats}}</td>



                                <td>
                                    <div class="btn btn-group-xs">

                                            <a href="{{url('editBus')}}/{{$value->id}}" class="btn btn-xs btn-primary">Edit</a>
                                        <a href="{{url('deleteBus')}}/{{$value->id}}" class="btn btn-xs btn-primary">Delete Bus</a>






                                    </div>
                                </td>
                            </tr>
@endforeach
                        </tbody>
                    </table>

                </div>

        </div>
    </div>

    @endsection