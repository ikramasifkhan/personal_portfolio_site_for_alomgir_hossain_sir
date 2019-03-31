<!--        =================navbar start here=========================-->

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn " onclick="closeNav()">&times;</a>
    <div class="nav_brand">
        <a href="{{route('/')}}" >Ah</a>
    </div>
    <div class="main_menu">
        <ul class="menu_bar clear_both">
            <li ><a href="{{route('/')}}" class="active">Home</a></li>
            <li><a href="{{route('about-me')}}">About</a></li>
            <li><a href="{{route('resume')}}">Resume</a></li>
            <li><a href="{{route('recent-work')}}">Recent work</a></li>
            <li><a href="{{route('contact-info')}}">Contact details</a></li>
        </ul>
    </div>
    <div class="social_icon">
        <ul>
            <li><a href="#"> <i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-github"></i></a></li>
        </ul>
    </div>  
    <span style="font-size:30px;cursor:pointer" onclick="openNav()" class="open_nav">&#9776;</span>
</div>
<!--        =================navbar end here=========================-->


