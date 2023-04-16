<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{asset('assets')}}/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/admin/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        @if( Session::has( 'loggedout' ))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                {{ Session::get( 'loggedout' ) }}
            </div>
        @endif
        @if( Session::has( 'role' ))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                {{ Session::get( 'role' ) }}
            </div>
        @endif
        <form action="{{route('user')}}" method="post">
            @csrf
            <input type="text" name="email" placeholder="email" class="form-control"><br>
            <input type="password" name="password" placeholder="user password" class="form-control"><br>
            <button type="submit" class="btn-success btn">Login</button>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<script src="{{asset('assets')}}/admin/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{asset('assets')}}/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{{asset('assets')}}/admin/plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{asset('assets')}}/admin/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets')}}/admin/dist/js/app.min.js" type="text/javascript"></script>


<script src="{{asset('assets')}}/admin/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>



