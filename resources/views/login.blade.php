<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Unimagec | login  </title>

    <!-- Scripts -->
   
    <script src="{{asset('js/main.js')}}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/icons/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">

<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
                @if(session()->has('message'))
                    <span>{{ session()->get('message') }}</span>
                @endif
		<div class="container-login100">
			<div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{asset("img/login.png")}}" alt="img">
                </div>      
                    <form method="POST" action="" class="login100-form validate-form">
                        @csrf
                        <span class="login100-form-title">
						User Login
					   </span>
                       <div class="wrap-input100 validate-input">
                            <div class="col-md-6">
                                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="focus-input100"></span>
						        <span class="symbol-input100">
							    <i class="fa fa-envelope" aria-hidden="true"></i>
						        </span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input">
                            
                            <div class="col-md-6">
                                <input id="password" type="password" class="input100  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="focus-input100"></span>
						        <span class="symbol-input100">
							    <i class="fa fa-lock" aria-hidden="true"></i>
						        </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="text-center p-t-12" style= "margin-left:35px">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="txt1" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                       
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn" style= "margin-left:55px">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <div class="text-center p-t-136">
                                    <a class="txt2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                    </a>
                                </div>         
                                @endif
                            </div>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!--===============================================================================================-->	
<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{('vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	

</body>
</html>

