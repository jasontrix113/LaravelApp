<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Maria Gracia | Record Monitoring Systems</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/MyCss.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" id="navbar-brand" href="{{ url('/') }}">
                        MGRMS
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    @guest
                    @else
                    
                    <!--<ul class="nav navbar-nav">
                        &nbsp;
                         <li><a id="nav-items" href="{{ route('home') }}">Dashboard</a></li>
                         <li><a id="nav-items" href="{{ route('pledge') }}">Pledge</a></li>
                         <li><a id="nav-items" href="{{ route('redemption') }} ">Redemption</a></li>
                         <li><a id="nav-items" href="{{route('pledge_table')}}">Pledge and Redemption Summary</a></li>
                    </ul>-->
                    @endguest
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <!-- <li><a href="{{ route('login') }}" id="links"><span><i class="fa fa-sign-in fa-1x"></i></span></a></li>
                            <li><a href="{{ route('register') }}" id="links"><span><i class="fa fa-user-plus fa-1x"></i></span> </a></li> -->
                        @else
                       
                            <li class="dropdown">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" id="user">
                                    <span><i class="fa fa-user-circle" style="margin-right: 2px;"></i></span>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <!--<span> <i class="fa fa-user"></i></span>-->
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>  
            </div>
        </nav>
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
            </li>
            <li id="nav-item"><a class="nav-link" href="{{ route('home') }}">Dashboard</a></li>
            <li id="nav-item"><a class="nav-link" href="{{ route('pledge') }}">Pledge</a></li>
            <li id="nav-item"><a class="nav-link" href="{{ route('redemption') }} ">Redemption</a></li>
            <li id="nav-item"><a class="nav-link" href="{{route('pledge_table')}}">Pledge and Redemption Summary</a></li>
          </ul>


        </nav>
    
        
        
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
