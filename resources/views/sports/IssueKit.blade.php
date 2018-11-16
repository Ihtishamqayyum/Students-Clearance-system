@extends('mainlayout.index')
@section('content')
    <div id="wrapper">
        <div class="content-main">

            <div class="validation-system">

                <div class="validation-form">

                    <form action="{{url('alotKit')}}" method="post">
                        <div class="form-group">
                            <label for="email">Kit Name</label>
                            <select name="KitName" class="form-control">
                                <option value="">Select Kit</option>
                                @foreach($kit as $value)
                                    <option value="{{$value->id}}">{{$value->kitName}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('kitName'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kitName') }}</strong>
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

@endsection