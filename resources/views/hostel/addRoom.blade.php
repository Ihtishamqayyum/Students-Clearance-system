@extends('mainlayout.index')
@section('content')
    <div id="wrapper">
        <div class="content-main">

    <form  action="saveRoom" method="post">
        {{csrf_field()}}
               <div class="form-group" >
            <label for="exampleInputEmail1">room number</label>
            <input type="text" class="form-control" id="room_number" placeholder="room number" name="room_number">
        </div>
        <div class="form-group" >
            <label for="exampleInputEmail1">capacity</label>
            <input type="text" class="form-control" id="capacity" placeholder="capacity" name="capacity">
        </div>
        <div class="form-group" >
            <label for="exampleInputEmail1">Available space for students</label>
            <input type="text" class="form-control" id="space_avail" placeholder="space Available" name="space_avail">
        </div>

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