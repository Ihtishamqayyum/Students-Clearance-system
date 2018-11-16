@extends('mainlayout.index')
@section('content')
    <div id="wrapper">
        <div class="content-main">
            <form action="{{url('updateBus')}}" method="post">

                <div class="form-group">
                    <label for="busnumber">Bus Number</label>
                    <input type="text" name="busNumber" class="form-control" value="{{$edit->busNumber}}">
                </div>
                <input type="hidden" name="id" class="form-control" value="{{$edit->id}}">
                <div class="form-group">
                    <label for="bus stop">Bus Stop</label>
                    <input type="text" name="BusStop" class="form-control" placeholder="Enter Bus Stop" value="{{$edit->busStop}}" >
                </div>
                <button type="submit" class="btn btn-success">update Bus</button>
                {{csrf_field()}}
            </form>
        </div>
    </div>



    @endsection