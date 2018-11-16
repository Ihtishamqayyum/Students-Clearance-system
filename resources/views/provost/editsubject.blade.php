@extends('mainlayout.index')
@section('content')
    <div class="wrapper">
        <div class="content-main">
            <div class="well">
                <form action="/updatesubject/<?php echo Request::segment(2); ?>" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" value="{{$subject->subjectName}}" name="subject" placeholder="Enter subject Name">
                    {{$errors->first('subject')}}
                    </div>

                    <div class="form-group">
                        <label for="Department">Department</label>
                        <select class="form-control" name="department">
                            <option value="">Select Department</option>
                            @foreach($department as $value)
                                <option value="{{$value->id}}">{{$value->departmentName}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Department">Program</label>
                        <select class="form-control" name="program">
                            <option value="">Select program</option>
                            @foreach($program as $value)
                                <option value="{{$value->id}}">{{$value->programName}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Department">Select Semester</label>
                        <select class="form-control" name="semester">
                            <option value="">Select Semester</option>
                            @foreach($semester as $value)
                                <option value="{{$value->id}}">{{$value->semName}}</option>
                            @endforeach

                        </select>
                    </div>
                    {{--<a href="{{url('')}}"--}}
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


@endsection