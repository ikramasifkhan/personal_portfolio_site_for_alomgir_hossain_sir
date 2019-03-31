<!DOCTYPE html>
<html>
    <head>
        <title>Alomgir Hossain @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Open+Sans:400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/')}}front-end/css/all.min.css">
        <link rel="stylesheet" href="{{asset('/')}}front-end/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('/')}}front-end/css/style.css">
    </head>
    <body>
        @include('front-end.includes.menu')

        <!--        =================main body start here=========================-->
        @yield('body')
        <!--        =================main body ends here=========================-->

        @include('front-end.includes.footer')
        <script src="{{asset('/')}}front-end/js/jquery-3.3.1.min.js"></script>
        <script src="{{asset('/')}}front-end/js/t.min.js"></script>
        <script src="{{asset('/')}}front-end/js/bootstrap.min.js"></script>
        <script src="{{asset('/')}}front-end/js/isotope.min.js"></script>
        <script src="{{asset('/')}}front-end/js/myScript.js"></script>

    </body>
</html>



