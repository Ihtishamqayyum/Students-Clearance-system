@extends('mainlayout.index')
@section('content')
<div class="flex-md-wrap">
    <div class="content-main">
        <table class="table table-responsive">
            <thead>
            <tr>
            <th>Name</th>
            <th>Department</th>
            <th>batch</th>
            <th>Semester</th>
            <th>program</th>
            <th>defaults</th>
            <th>Action</th>
            </tr>
            </thead>
            <tr>
                @foreach($user as $value)
                <td>{{$value->name}}</td>
                <td>{{$value->departmentName}}</td>
                <td>{{$value->batchName}}</td>
                <td>{{$value->semName}}</td>
                <td>{{$value->programName}}</td>
                <td>{{$value->defaults}}</td>
                    <td>
                        <a href="{{url('pay')}}/{{$value->id}}">hey</a>

                    </td>

            </tr>
            @endforeach
        </table>

    </div>

</div>
    @endsection