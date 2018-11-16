@extends('mainlayout.index')
@section('content')
    <div class="wrapper">
        <div class="content-main">
            <div class="well">

                <form action="{{url('saveFee')}}" method="post">
                    {{csrf_field()}}
                <input type="hidden" name="id" value="{{Request::segment(2)}}">
<div class="form-group">

    <select class="form-control" name="subject">
        <option value="">Select subject</option>
        @foreach($subject as $value)
            <option value="{{$value->id}}">{{$value->subjectName}}</option>
            @endforeach
    </select>
</div>
                <div class="form-group">
                    <input type="text" name="amountSubmitted" class="form-control" placeholder="Enter the Amount Submitted" >
                </div>
                <div class="form-group">
                    <input type="text" name="totalFee" class="form-control" placeholder="Enter the Total fee" >
                </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
            </div>
        </div>
    </div>

    @endsection