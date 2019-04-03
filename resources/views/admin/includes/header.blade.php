<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <a href="{{url('dashboard')}}" class="logo">
            AH
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            <!-- settings start -->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-tasks"></i>
                    <span class="badge bg-success">8</span>
                </a>
                <ul class="dropdown-menu extended tasks-bar">
                    <li>
                        <p class="">You have 8 pending tasks</p>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Target Sell</h5>
                                    <p>25% , Deadline  12 June’13</p>
                                </div>
                                <span class="notification-pie-chart pull-right" data-percent="45">
                                    <span class="percent"></span>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Product Delivery</h5>
                                    <p>45% , Deadline  12 June’13</p>
                                </div>
                                <span class="notification-pie-chart pull-right" data-percent="78">
                                    <span class="percent"></span>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Payment collection</h5>
                                    <p>87% , Deadline  12 June’13</p>
                                </div>
                                <span class="notification-pie-chart pull-right" data-percent="60">
                                    <span class="percent"></span>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Target Sell</h5>
                                    <p>33% , Deadline  12 June’13</p>
                                </div>
                                <span class="notification-pie-chart pull-right" data-percent="90">
                                    <span class="percent"></span>
                                </span>
                            </div>
                        </a>
                    </li>

                    <li class="external">
                        <a href="#">See All Tasks</a>
                    </li>
                </ul>
            </li>
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id="header_inbox_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-important">4</span>
                </a>
                <ul class="dropdown-menu extended inbox">
                    <li>
                        <p class="red">You have 4 Mails</p>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="{{asset('/')}}admin/images/3.png"></span>
                            <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                            </span>
                            <span class="message">
                                Hello, this is an example msg.
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="{{asset('/')}}admin/images/1.png"></span>
                            <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                            </span>
                            <span class="message">
                                Nice admin template
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="{{asset('/')}}admin/images/3.png"></span>
                            <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                            </span>
                            <span class="message">
                                This is an example msg.
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="{{asset('/')}}admin/images/2.png"></span>
                            <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                            </span>
                            <span class="message">
                                Hi there, its a test
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">See all messages</a>
                    </li>
                </ul>
            </li>
            <!-- inbox dropdown end -->
            <!-- notification dropdown start-->
            <li id="header_notification_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-warning">3</span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <li>
                        <p>Notifications</p>
                    </li>
                    <li>
                        <div class="alert alert-info clearfix">
                            <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                            <div class="noti-info">
                                <a href="#"> Server #1 overloaded.</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="alert alert-danger clearfix">
                            <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                            <div class="noti-info">
                                <a href="#"> Server #2 overloaded.</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="alert alert-success clearfix">
                            <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                            <div class="noti-info">
                                <a href="#"> Server #3 overloaded.</a>
                            </div>
                        </div>
                    </li>

                </ul>
            </li>
            <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder=" Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="username"> {{ Auth::user()->name }}</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                    <li>
                       <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-fw"></i> Logout
                    </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                         </form>
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->

        </ul>
        <!--search & user info end-->
    </div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{url('/dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>About me</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('add-about-info')}}">Add about me</a></li>
                        <li><a href="{{route('manage-about-info')}}">Manage about info</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Courses</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('add-courses')}}">Add courses</a></li>
                        <li><a href="{{route('manage-course')}}">Manage course content</a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Course schedule</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('add-course-schedule-info')}}">Add course schedule</a></li>
                        <li><a href="{{route('manage-course-schedule-info')}}">Manage course schedule</a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>My service</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('add-service')}}">Add my service</a></li>
                        <li><a href="{{route('manage-service')}}">Manage service</a></li>
                    </ul>
                </li>
                
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-area-chart"></i>
                        <span>My skill</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('add-skill')}}">Add my skill</a></li>
                        <li><a href="{{route('manage-skill')}}">Manage skill</a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Educational background</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('add-education')}}">Add educational background</a></li>
                        <li><a href="{{route('manage-education')}}">Manage educational background</a></li>
                    </ul>
                </li>
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
