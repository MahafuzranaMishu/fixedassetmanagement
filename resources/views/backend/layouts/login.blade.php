
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('/css/font-awesome.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('/css/animate.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('/css/hamburgers.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('/css/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('/css/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/css/main.css')}}">

<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt>
<img src="{{url('/image/img-01.webp')}}" alt="IMG">
</div>



<form action="{{route('Admin.login.post')}}" method="post" class="login100-form validate-form">
@csrf
<span class="login100-form-title">
   Login
</span>
<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<input class="input100" type="text" name="email" placeholder="Email">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-envelope" aria-hidden="true"></i>
</span>
</div>
<div class="wrap-input100 validate-input" data-validate="Password is required">
<input class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>
 <div class="form-group">
  <input type="submit" value="Login" class="btn float-right login_btn">
 </div>
<div class="text-center p-t-12">
<span class="txt1">

@if(session()->has('message'))
   <span class="alert alert-danger">{{session()->get('message')}}</span>
  @endif
Forgot
</span>
<a class="txt2" href="#">
Username / Password?
</a>
</div>
<div class="text-center p-t-136">
<a class="txt2" href="{{route('User.create')}}">
Create your Account
<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
</a>
</div>
</form>
</div>
</div>
</div>

<script src="{{url('/js/jquery-3.2.1.min.js')}}"></script>

<script src="{{url('/js/popper.js')}}"></script>
<script src="{{url('/js/bootstrap.min.js')}}"></script>

<script src="{{url('/js/select2.min.js')}}"></script>

<script src="{{url('/js/tilt.jquery.min.js')}}"></script>
<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="{{url('/js/main.js')}}"></script>
<script defer src="{{url('/js/beacon.min.js')}}" data-cf-beacon='{"rayId":"67d70ec76db0494f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.0","si":10}'></script>
</body>
</html>
