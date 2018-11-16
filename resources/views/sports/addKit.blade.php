@extends('mainlayout.index')
@section('content')
    <form action="{{url('saveKit')}}" method="post">
        <div class="form-group">
            <label for="email">kit Name</label>
            <input type="text" name="kit" class="form-control" id="email" placeholder="Enter Kit Name">
        </div>
        {{csrf_field()}}
        <div class="form-group" >
            <label for="exampleInputEmail1">Quantity</label>
            <input type="text" class="form-control" id="capacity" placeholder="capacity" name="quantity">
        </div>
        <div class="form-group" >
            <label for="exampleInputEmail1">Available </label>
            <input type="text" class="form-control" id="space_avail" placeholder="space Available" name="available">
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
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



@endsection