@extends('mainlayout.index')
@section('content')
    <div id="wrapper">
        <div class="content-main">
            <form action="{{url('bustostudent')}}" method="post">

                <div class="form-group">
                    <label for="busnumber">Bus Number</label>
                    <select name="busId" class="form-control">
                        <option value="">Select bus Number</option>
                        @foreach($bus as $value)
                            <option value="{{$value->id}}">{{$value->busNumber}}</option>
                        @endforeach
                    </select>

                </div>
                    <div class="form-group">
                        <label for="semester">Select Your Semester</label>
                        <select name="semester_id" class="form-control">
                            <option value="" >Select semester</option>
                            @foreach($semester as $value)
                                <option value="{{$value->id}}">{{$value->semName}}</option>
                                @endforeach
                        </select>
                    </div>

                <input type="hidden" name="id" class="form-control" value="{{Request::segment(2)}}">
                <button type="submit" class="btn btn-success">Alot Bus</button>
                {{csrf_field()}}
            </form>
        </div>
    </div>


@endsection