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
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->userType}}</td>
                        <td>
                            <a href="{{url('verify')}}/{{$value->id}}" class="btn btn-primary">Verify</a>
                            <a href="{{url('de-verify')}}/{{$value->id}}" class="btn btn-warning">De-Verify</a>
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