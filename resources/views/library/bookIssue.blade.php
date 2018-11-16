@extends('mainlayout.index')
@section('content')
    <div id="wrapper">
        <div class="content-main">

            <div class="validation-system">

                <div class="validation-form">

    <form action="{{url('issueBook')}}" method="post">
        <div class="form-group">
            <label for="email">Book Name</label>
            <select name="bookName" class="form-control" id="bookname">
                <option value="">Select Book</option>
                @foreach($book as $value)
                <option value="{{$value->id}}">{{$value->bookName}}</option>
                @endforeach
            </select>

            @if ($errors->has('bookName'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bookName') }}</strong>
                                    </span>
            @endif
        </div>


            <div class="form-group">
            <label for="date">Issue Date</label>
<input type="date" name="date" class="form-control">
                @if ($errors->has('date'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                @endif

        </div>

        <div class="form-group">
            <input type="hidden" name="id" class="form-control" value="{{ Request::segment(2) }}">
        </div>
        {{csrf_field()}}


        <button type="submit" class="btn btn-default">Submit</button>
    </form>
                </div>
            </div>
        </div>
    <script type="text/javascript">
        $(document).ready(function () {


        $('#bookname').change(function(){

            var book_id=$(this).val();

            $.ajax({
                method:'post',
                url:'book_number.php',
                data:{book_id:book_id},

                success:function(Result){
                    $('#book_number').html(Result);
                }


            });

        });
        })
    </script>

@endsection