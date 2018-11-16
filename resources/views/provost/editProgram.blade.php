@extends('mainlayout.index')
@section('content')
    <div class="wrapper">
        <div class="content-main">
            <form action="{{url('updateProgram')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="Session">Program Name</label>
                    <input type="text"  name="program" value="{{$program->programName}}" class="form-control" placeholder="Enter Program Name">

                </div>
<input type="hidden" name="id" value="{{$program->id}}">
                <button type="submit" class="btn btn-info">Submit</button>



            </form>
        </div>
    </div>

@endsection