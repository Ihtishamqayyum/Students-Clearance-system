@extends('mainlayout.index')
@section('content')

    <div id="wrapper">
        <div class="content-main">

            <form  action="{{url('UpdateRoom')}}" method="post">
                {{csrf_field()}}
                <div class="form-group" >
                    <label for="exampleInputEmail1">room number</label>
                    <input type="text" class="form-control" id="room_number" placeholder="room number" name="room_number" value="{{$room->roomNumber}}">
                </div>
                <div class="form-group" >
                    <label for="exampleInputEmail1">capacity</label>
                    <input type="text" class="form-control" id="capacity" placeholder="capacity" name="capacity" value="{{$room->Capacity}}">
                </div>
                <div class="form-group" >
                    <label for="exampleInputEmail1">Available space for students</label>
                    <input type="text" class="form-control" id="space_avail" placeholder="space Available" name="space_avail">
                </div>
<input type="hidden" name="id" value="{{$room->id}}">
                <button type="submit" class="btn btn-success " name="submit">Submit</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $("#room_number,#capacity").on("change keyup", function(e){
            var room_number = parseFloat($("#room_number").val());
            var capacity = parseFloat($("#capacity").val());
            var result =  capacity ;
            if (!isNaN(result)) {
                $("#space_avail").val(result);
            }
        });
    </script>

    @endsection