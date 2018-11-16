
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
<link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<script src="{{asset('js/jquery.min.js')}}"> </script>
<script src="{{asset('js/bootstrap.min.js')}}"> </script>
  
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
       <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.html">Clearance</a></h1>
               </div>
             <div class=" border-bottom">
            <div class="full-left">
              <section class="full-top">
                <button id="toggle"><i class="fa fa-arrows-alt"></i></button>   
            </section>
            <form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>
     

            <!-- Brand and toggle get grouped for better mobile display -->
         
           <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="drop-men" >
                <ul class=" nav_1">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">{{Auth::user()->name}}<i class="caret"></i></span><img src="{{asset('images/wo.jpg')}}"></a>
                      <ul class="dropdown-menu " role="menu">
                        <li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
                        <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                        <li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                      </ul>
                    </li>
                   
                </ul>
             </div><!-- /.navbar-collapse -->
            <div class="clearfix">
       
     </div>
      
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                              @if(Auth::user()->userType==='provost')

                        <li>
                            <a href="{{'home'}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                        </li>

                        <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Students Record</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="404.html" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Fee Status</a></li>
                            <li><a href="{{url('request')}}" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>User Request</a></li>
                            <li><a href="faq.html" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>Library Status</a></li>
                            <li><a href="blank.html" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Sport Status</a></li>

                            <li><a href="blank.html" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Hostel Status</a></li>

                            <li><a href="blank.html" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Department Status</a></li>

                       </ul>
                    </li>

                     <li>
                        <a href="{{url('department')}}" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Departments</span> </a>
                    </li>
                        <li><a href="{{url('addExaminar')}}" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Add Examinar</a></li>
                        <li>
                            <a href="{{url('program')}}" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Program</span> </a>
                        </li>
                        <li>
                            <a href="{{url('subject')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Subjects</span> </a>
                        </li>
                        <li>
                        <a href="{{'batch'}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Batch</span> </a>
                    </li>

                    <li>
                        <a href="{{'session'}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">session</span> </a>
                    </li>
                    @endif
                    @if(Auth::user()->userType==='sports')
                                      <li>
                                          <a href="{{'home'}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                                      </li>

                                      <li>
                        <a href="{{url('StudentData')}}" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Student Record</span> </a>
                    </li>
                        <li>
                            <a href="{{url('kits')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Sports item</span> </a>
                        </li>

                    @endif

                                  @if(Auth::user()->userType==='departmental')
                                      <li>
                                          <a href="{{'Allstudents'}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                                      </li>
                                         <li>
                                          <a href="{{url('examinationRecord')}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Examination Record</span> </a>
                                      </li>
                                      {{--<li>
                                                      <a href="{{url('feepaper')}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Fee for fail Paper</span> </a>
                                      </li>--}}

                                      <li>
                                          <a href="{{url('stdExamRecord')}}" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Student Record</span> </a>
                                      </li>
                                      <li>
                                          <a href="{{url('subjects')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Subjects </span> </a>
                                      </li>

                                  @endif

                              @if(Auth::user()->userType==='librarian')
                                      {{--<li>
                                          <a href="{{'home'}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                                      </li>

                                      <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="signin.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>LogOut</a></li>
                            <li><a href="signup.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Profile Sitting</a></li>
                        </ul>
   --}}                 </li>
                    <li>
                        <a href="{{url('book')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Books</span> </a>
                    </li>
                                      <li>
                        <a href="{{url('LibraryRecord')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Library Record</span> </a>
                    </li>
                    <li>
                        <a href="{{url('studentsRecord')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Students Record</span> </a>
                    </li>
                </ul>

                    @endif
                    @if(Auth::user()->userType==='transport')
                        <li>
                            <a href="{{'home'}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                        </li>
                        <li>
                            <a href="{{url('TransportRecord')}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Transport Record</span> </a>
                        </li>

                        <li>
                            <a href="{{url('bus')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Buses</span> </a>
                        </li>
                        <li>
                            <a href="{{url('StudentsDATA')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Students Record</span> </a>
                        </li>
                        </ul>

                    @endif
                    @if(Auth::user()->userType=='hostel')
                        <li>
                            <a href="{{url('hostel')}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                        </li>

                        {{--<li>
                            <a href="{{url('hostelRecord')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Hostel Records</span> </a>
                        </li>--}}
                        <li>
                            <a href="{{url('room')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Rooms</span> </a>
                        </li>

                        <li>
                            <a href="{{url('AllStudents')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Alot Room </span> </a>
                        </li>
                        </ul>
                      @endif
                    @if(Auth::user()->userType=='finance')
                        <li>
                            <a href="{{url('finance')}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                        </li>
                        <li>
                            <a href="{{url('FeeRecord')}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Fee Records</span> </a>
                        </li>

                    @endif

                    @if(Auth::user()->userType=='Student')
                        <li>
                            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Students Record</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{url('libraryStatus')}}" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Libaray Status</a></li>
                                <li><a href="{{url('transportStatus')}}" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Transport Status</a></li>
                                <li><a href="{{url('sportStatus')}}" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>Sports Status</a></li>
                                <li><a href="{{url('hostelStatus')}}" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Hostel Status</a></li>

                                <li><a href="{{url('financeStatus')}}" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Fee Status</a></li>

                                <li><a href="{{url('proctorStatus')}}" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Proctor Record</a></li>
                                <li><a href="{{url('examination')}}" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Examination Record</a></li>

                            </ul>
                        </li>
                    @endif
                    @if(Auth::user()->userType=='proctor')
                        <li>
                            <a href="{{url('std')}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                        </li>
                        <li>
                            <a href="{{url('stdRecord')}}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Fine Record</span> </a>
                        </li>


                    @endif

                </div>

            </div>
             </div>        </nav>


         <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
    <!--banner-->   
             <div class="banner">

                <h2>


                <h1><span>{{Auth::user()->userType}}</span></h1>
                </h2>
            </div>
        <!--//banner-->
               <!--grid-->
     <div class="inbox-mail">
    
<!-- tab content -->

<div class="row " style="width: 90%; margin: auto;" >
	@yield('content')
</div>

<div class="clearfix"> </div>
   </div>
    
</div>

    <!--//grid-->
        <!---->


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

</body>
</html>

