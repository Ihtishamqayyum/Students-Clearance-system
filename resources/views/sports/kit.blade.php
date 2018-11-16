@extends('mainlayout.index')
@section('content')
    <div class="row"><div class="col-sm-12">
            @if(Session::has('message'))
                @if(Session::get('message') == ('update_success'))
                    <div class="alert alert-success">Department Updated Successfully</div>
                @elseif(Session::get('message') == 'update_success')
                    <div class="alert alert-success">Updated Successfully.</div>
                @elseif(Session::get('message') == 'delete_success')
                    <div class="alert alert-danger">Deleted Successfully.</div>
                @elseif(Session::get('message') == 'error')
                    <div class="alert alert-danger">Invitation could not be send because provided email already exists</div>
                @elseif(Session::get('message') == 'update_error')
                    <div class="alert alert-danger">agency has not been updated due to some wrong input.</div>
                @endif

            @endif
        </div>

        <div class="row">
            <div class="col-md-6" style="width:50%;margin:auto;margin-bottom: 2%;">
                <a href="{{url('addKit')}}" class="btn btn-primary">Add Kits</a>
            </div>
        </div>
        <div class="well">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>kit Id</th>
                    <th>kit Name</th>
                    <th>kit Quantity</th>
                    <th>kit Available</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($kits as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->kitName}}</td>
                        <td>{{$value->Quatity}}</td>
                        <td>{{$value->Available}}</td>
                        <td><div class="btn btn-group">
                                <a href="{{url('deleteKit')}}/{{$value->id}}" class="btn btn-warning">Delete</a>
                                <a href="{{url('editKit')}}/{{$value->id}}" class="btn btn-primary">Edit</a>
                            </div></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
@endsection