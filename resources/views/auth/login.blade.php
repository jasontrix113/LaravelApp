@extends('layouts.app')

@section('content')

<head>
     <link href="{{ asset('css/MyCss.css') }}" rel="stylesheet">
     <link href="{{ asset('plugins/fakeLoader.css') }}" rel="stylesheet">
     <style type="text/css">
            .pace .pace-progress {
                background-color: #b43434;
                color: #ffffff;
            }
            .pace .pace-activity {
                box-shadow: inset 0 0 0 2px #3fa7ce, inset 0 0 0 6px rgb(32, 134, 221);
            }
            #header .top-header{
              padding: 15px;
            }
       </style>
</head>
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>
<body id="auth-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="panel panel-default" id="login-form">
                        <div class="panel-body">
                          <h3 class="panel-title">Welcome!</h3>   
                            <div class="form">
                                <form class="form-horizontal" method="post" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                                        <label for="email" class="control-label">Email Address</label>
                                        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus tabindex="1">
                                        @if ($errors->has('email'))
                                            <span style="color: #ff1818;" class="help-block">
                                                <strong>{{ $errors->first('email') }} </strong>
                                            </span>
                                        @endif
                                    </div>
                                        
                                    <!--<div class="form-group{{ $errors->has('username') ? 'has-error' : '' }}">
                                        <label for="username" class="control-label">Username</label>
                                        <input type="text" id="username" class="form-control" name="username" value="{{ old('username')}}" required autofocus>
                                        @if ($errors->has('username'))
                                            <span style="color: #ff1818;" class="help-block">
                                                <strong>{{ $errors->first('username') }} </strong>
                                            </span>
                                        @endif 
                                    </div>-->
                                    <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                                        <label for="password" class="control-label">Password<a href="" class="show" id="show" onclick="return show()" tabindex="0"><span id="show_eye" class="fa fa-eye"></span> show</a></label>
                                        <input type="password" id="password" name="password" class="form-control" required tabindex="2">

                                        @if ($errors->has('password'))
                                            <span class="help-block" style="color: #ff1818;">
                                                <strong> {{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                Remember Me 
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button id="login_btn" type="submit" class="btn btn-primary btn-block" tabindex="3">
                                            <span><i class="fa fa-key"></i></span>
                                            Login
                                        </button>
                                        <br>
                                        <p style="color: white; display: block;">
                                            Need an account?
                                            <a style="color: white;" class="btn btn-link" href=" {{ route('register') }}">
                                            Create an account
                                            </a>
                                        </p>
                                        <a id="btn_FYP" class="btn btn-link" href=" {{ route('password.request') }}" style="display: block; ">
                                            Forgot your password?
                                        </a>
                                    </div>
                                </form>
                            </div>   
                        </div>     
                    </div>
                </div>    
            </div>
        </div>  
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('plugins/fakeLoader.min.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

    <script type="text/javascript">
        function show()
            {
            if( $("#password").attr("type") == "password" ){
                $("#password").attr("type", "text");
                $("#show_eye").attr("class", "fa fa-eye-slash");
            }else{
                $("#password").attr("type", "password");
                $("#show_eye").attr("class", "fa fa-eye");
            }      
                return false;
            }
    </script>
@endsection
