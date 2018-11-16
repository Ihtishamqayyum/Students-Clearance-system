@extends('mainlayout.index')
@section('content')
<div class="wrapper">
    <div class="content-main">
        <div class="well">

            <form action="{{url('fined')}}" method="post">

                <div class="form-group">
                    <label for="fine">Fine In Rs</label>
                    <input type="number" name="fine" class="form-control" placeholder="Amount" id="fine" required>

                </div>

               <div class="form-group">
                <textarea class="form-control" rows="5" name="reason" placeholder="Reason" required></textarea>
               </div>
                <input type="hidden" name="id" value="{{Request::segment(2)}}">
                   <button type="submit" class="btn btn-success">Submit</button>
 {{csrf_field()}}
            </form>

        </div>
    </div>
</div>
<script type="text/javascript">
    $("#fine").on ("change keyup", function(e){
        var fine = parseFloat($("#fine").val());
        var result= default;
        if(!isNaN(result)) {
            $("#default").val(result);
        }
    });
</script>

    @endsection