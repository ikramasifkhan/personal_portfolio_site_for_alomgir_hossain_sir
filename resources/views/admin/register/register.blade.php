
<!DOCTYPE html>
<head>
    <title>Admin panel - register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
          Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="{{asset('/')}}admin/css/bootstrap.min.css" >
    <link href="{{asset('/')}}admin/css/style.css" rel='stylesheet' type='text/css' />
    <link href="{{asset('/')}}admin/css/style-responsive.css" rel="stylesheet"/>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('/')}}admin/css/font.css" type="text/css"/>
    <link href="{{asset('/')}}admin/css/font-awesome.css" rel="stylesheet"> 
    <script src="{{asset('/')}}admin/js/jquery2.0.3.min.js"></script>
</head>
<body>
    <div class="reg-w3">
        <div class="w3layouts-main">
            <h2>Register Now</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
<!--                <input type="text" class="ggg" name="Name" placeholder="NAME" required="">-->
                <input  type="text" class="ggg " name="name" value="{{ old('name') }}" required autofocus placeholder="NAME" >
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif

                <input id="email" type="email" class="ggg" name="email" value="{{ old('email') }}" required placeholder="E-MAIL">
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                <input id="password" type="password" class="ggg" name="password" required placeholder="PASSWORD">

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

                <input id="password-confirm" type="password" class="ggg" name="password_confirmation" required placeholder="CONFIRM PASSWORD">


                <div class="clearfix"></div>
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-danger">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
            <p>Already Registered.<a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>
    <script src="{{asset('/')}}admin/js/bootstrap.js"></script>
    <script src="{{asset('/')}}admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{asset('/')}}admin/js/scripts.js"></script>
    <script src="{{asset('/')}}admin/js/jquery.slimscroll.js"></script>
    <script src="{{asset('/')}}admin/js/jquery.nicescroll.js"></script>

    <script src="{{asset('/')}}admin/js/jquery.scrollTo.js"></script>
</body>
</html>


