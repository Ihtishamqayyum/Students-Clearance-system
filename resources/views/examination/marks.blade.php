@extends('mainlayout.index')
@section('content')
    <div class="wrapper">
        <div class="content-main">
            <div class="well">
<form action="{{url('savemarks')}}" method="post">
    {{csrf_field()}}
<input type="hidden" name="id" value="{{Request::segment(2)}}">
<div class="form-group">
    <select class="form-control" name="subject">
        <option value="">Select Subject</option>
        @foreach($subject as $value)
            <option value="{{$value->id}}">{{$value->subjectName}}</option>
            @endforeach
    </select>
</div>
<div class="form-group">
    <label for="marks">Enter Marks Obtained</label>
    <input type="text" name="marks" placeholder="Enter Marks Obtained" class="form-control">
</div>
<div class="form-group">
    <label for="marks">Enter Total Marks</label>
    <input type="text" name="totalmarks" placeholder="Enter Total Marks" class="form-control">
</div>
<div class="form-group">
    <select class="form-control" name="remarks">
        <option value="">Remarks</option>
        <option value="Pass">Pass</option>
        <option value="Fail">Fail</option>
    </select>
</div>

            <button type="submit" class="btn btn-success">Submit</button>

</form>     </div>
        </div>
    </div>



    @endsection