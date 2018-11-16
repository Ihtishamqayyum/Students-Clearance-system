@extends('mainlayout/index')
@section('content')
<div id="wrapper">
<div class="content-main">
<form action="{{url('addbus')}}" method="post">

<div class="form-group">
    <label for="busnumber">Bus Number</label>
    <input type="text" name="busNumber" class="form-control" placeholder="Enter Bus Number">
</div>
    <div class="form-group">
        <label for="bus stop">Bus Stop</label>
        <input type="text" name="BusStop" class="form-control" placeholder="Enter Bus Stop" >
    </div>
    <div class="form-group" >
        <label for="exampleInputEmail1">capacity</label>
        <input type="text" class="form-control" id="capacity" placeholder="capacity" name="capacity">
    </div>
    <div class="form-group" >
        <label for="exampleInputEmail1">Available space for students</label>
        <input type="text" class="form-control" id="space_avail" placeholder="space Available" name="space_avail">
    </div>

    <button type="submit" class="btn btn-success">Add Bus</button>
    {{csrf_field()}}
</form>
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


</div>
</div>
    @endsection