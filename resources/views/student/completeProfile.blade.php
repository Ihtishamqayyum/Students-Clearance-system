
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>{{Auth::user()->userType}} | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
    <!-- Custom Theme files -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Mainly scripts -->
    <script src="{{asset('js/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
    <!-- Custom and plugin javascript -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/screenfull.js')}}"></script>


    <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }



            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });



        });
    </script>

</head>
<body>
<div id="wrapper">
    <div class="content-main">

        <!--banner-->
        <div class="banner">
            <h2>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Complete Profile</span>
            </h2>
        </div>
        <!--//banner-->
        <!--grid-->
        <div class="validation-system">

            <div class="validation-form">
                <!---->

                <form action="{{url('savestudent')}}" method="post">
                    {{csrf_field()}}
                    <div class="vali-form">
                        <div class="col-md-6 form-group1">
                            <label class="control-label">Father Name</label>
                            <input type="text" placeholder="fatherName" required=""name="fathername">
                        </div>
                        <div class="col-md-6 form-group1 form-last">
                            <label class="control-label">Roll Number</label>
                            <input type="text" placeholder="Roll Number" required="" name="rollNo">
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="col-md-12 form-group1 group-mail">
                        <label class="control-label">Select Department</label>
                        <select name="department" class="form-control">
                            <option>Select department</option>
                            @foreach($department as $value)

                            <option value="{{$value->id}}">{{$value->departmentName}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 form-group1 group-mail">
                        <label class="control-label">Select Batch</label>
                        <select name="batch" class="form-control">
                            <option>Select Batch</option>
                            @foreach($batch as $value)

                                <option value="{{$value->id}}">{{$value->batchName}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 form-group1 group-mail">
                        <label class="control-label">Select Program</label>
                        <select name="program" class="form-control">
              <option>Select program</option>
                            @foreach($program as $value)
                                <option value="{{$value->id}}">{{$value->programName}}</option>
                                @endforeach

                        </select>
                    </div>
                    <div class="col-md-12 form-group1 group-mail">
                        <label class="control-label">Select Discipline</label>
                        <select name="discipline" class="form-control">
                            <option value="SELF">Self</option>
                            <option value="OPEN">Open</option>

                        </select>
                    </div>
                    <div class="col-md-12 form-group1 group-mail">
                        <label class="control-label">Select Semester</label>
                        <select name="semester" class="form-control">
                            <option>Select Semester</option>
                            @foreach($semester as $value)
                            <option value="{{$value->id}}">{{$value->semName}}</option>
                         @endforeach
                        </select>
                    </div>


                    <div class="clearfix"> </div>
                    <div class="col-md-12 form-group1 group-mail">
                        <label class="control-label">Date of Birth</label>
                        <input type="text" id="datetimepicker"  placeholder="Enter Date of Birth" required="" name="dob">
                    </div>
                    <div class="vali-form">
                        <div class="col-md-12 form-group1 group-mail">
                            <label class="control-label">Gender</label>
                            <select name="gender" class="form-control">
                                <option>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>

                            </select>
                        </div>

                        <div class="col-md-6 form-group1">
                            <label class="control-label">Phone Number</label>
                            <input type="text" placeholder="Phone Number" required="" name="phoneNumber">
                        </div>
                        <div class="col-md-6 form-group1 form-last">
                            <label class="control-label">Mobile Number</label>
                            <input type="text" placeholder="Mobile Number" required="" name="mobileNumber">
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="clearfix"> </div>
                    <div class="clearfix"> </div>
                    <div class="col-md-12 form-group1 ">
                        <label class="control-label">Address</label>
                        <textarea  placeholder="Your Comment..." required="" name="address">Address.....</textarea>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="clearfix"> </div>

                    <div class="col-md-12 form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                    <div class="clearfix"> </div>
                </form>

                <!---->
            </div>

        </div>
        <!--//grid-->
        <!---->
        <div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
    </div>
    <div class="copy">
        <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>     </div>
</div>
</div>
<div class="clearfix"> </div>
</div>

<!---->
<!--scrolling js-->
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<!--//scrolling js-->
<script>
    $(document).ready(function(){
    $('#datetimepicker').datetimepicker();
    });
</script>
</body>
</html>

