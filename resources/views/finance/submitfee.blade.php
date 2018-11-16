@extends('mainlayout.index')
@section('content')
@section('content')
    <div id="wrapper">
        <div class="content-main">

        <form action="{{url('savFee')}}" method="post">

                <div class="form-group">
                    <label for="semester">Select your Semester</label>
                 <select name="semester" class="form-control">
                     <option>select Semester</option>
                     @foreach($semester as $value)
                 <option value="{{$value->id}}">{{$value->semName}}</option>
                     @endforeach
                 </select>
                </div>
                    <div class="form-group">
                        <label for="submitted fee">Submitted Fee</label>
                        <input type="text" name="submittedFee" class="form-control" placeholder="fee Submitted by the Student" id="subfee">
                    </div>
            <div class="form-group">
                <label for="submitted fee">Total Fee</label>
                <input type="text" name="TotalFee" class="form-control" placeholder="Total Fee" id="totalfee">
            </div>
            <div class="form-group">
                <label for="submitted fee">Defaults</label>
                <input type="text" name="default" class="form-control" placeholder="defaults" id="default">
            </div>

            <div class="form-group">
                <label for="submitted fee">Submission date</label>
                <input type="date" name="date" class="form-control">
            </div>

            <div class="form-group">
                <label for="feelevel">Select fee Type</label>
                <select name="feeType" class="form-control">
                    <option>select Fee Type</option>
                    @foreach($feelevel as $value)
                        <option value="{{$value->id}}">{{$value->FeeType}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="{{Request::segment(2)}}">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>


            {{csrf_field()}}
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $("#subfee,#totalfee").on("change keyup", function(e){
            var subfee = parseFloat($("#subfee").val());
            var totalfee = parseFloat($("#totalfee").val());
            var result = totalfee - subfee ;
            if (!isNaN(result)) {
                $("#default").val(result);
            }
        });
    </script>


@endsection