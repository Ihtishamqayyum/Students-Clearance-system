@extends('mainlayout.index')
@section('content')
<div class="wrapper">
    <div class="content-main">
        <form action="{{url('saveProgram')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="Session">Program Name</label>
                <input type="text" name="program" class="form-control" placeholder="Enter Program Name">
       {{$errors->first('program')}}
            </div>
            <div class="form-group">
                <label for="program">Select department</label>
                <select class="form-control" name="department">
                <option>Select department</option>
                    @foreach($department as $value)
                        <option value="{{$value->id}}">{{$value->departmentName}}</option>
@endforeach
                </select>


            </div>

            <button type="submit" class="btn btn-info">Submit</button>



        </form>
           </div>
</div>

    @endsection