<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:300,400,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets2/style.css') }}" />
	  <link rel="stylesheet" href="{{ asset('assets2/shopstyle.css') }}" />
	  <link rel="stylesheet" href="{{ asset('assets2/aboutstyle.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/formstyle.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets2/adminstyle.css') }}"/>
    <style>
      @font-face {
            font-family: museo-sans-rounded, sans-serif;
            font-weight: 400;
            font-style: normal;
            src: url("https://use.typekit.net/ljb6ftw.css");
      }
    </style>
    @livewireStyles

    <title>Thrivy</title>

    <div class="home">
      <div class="top">
        <div class="flex-row">
          <a href="/">
            <img class="thrivy-logoyelo" src="{{ asset('assets2/images/thrivy logo_yelo.png') }}"/>             
          </a>
          <div class="thrivy museosansrounded900-regular-normal-white-18px">
            <b>THRIVY</b>
          </div>

          <nav class="navbar">
            <!-- Creating the hamburger menu -->
            <div class="hamburger-menu">
              <div class="line line-1"></div>
              <div class="line line-2"></div>
              <div class="line line-3"></div>
            </div>
            
            <!-- Creating the navigation options -->
            <ul class="nav-list">
              <li class="nav-item">
                <a href="#" class="nav-link">About</a>
              </li>

              <li class="nav-item">
                <a href="/shop" class="nav-link">Shop</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
              </li>
              @if(Route::has('login'))
              @auth
                @if(Auth::user()->utype === 'ADM')
                  <li class="nav-item">
                    <a title="Dashboard" href="{{ route('admin.dashboard') }}" class="nav-link">My Account ({{Auth::user()->name}})<!-- <i class="fa fa-angle-down" aria-hidden="true"></i> --></a>
                    <!-- <ul class="submenu curency" >
                      <li class="menu-item" >
                        <a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
                      </li>
                    </ul> -->
                  </li>
                  <li class="nav-item">
                    <a title="Products" href="{{ route('admin.products') }}" class="nav-link">All Products</a>
                  </li>
                  <li class="nav-item">
                    <a title="Orders" href="{{ route('admin.orders') }}" class="nav-link">All Orders</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
                  </li>
                  <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                  </form>
                @else
                  <li class="nav-item">
                    <a title="My Account" href="#" class="nav-link">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="submenu curency" >
                      <li class="menu-item" >
                        <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-item">Logout</a>
                  </li>
                  <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                  </form>
                @endif
              @else
                <li class="nav-item" ><a title="Register or Login" href="{{route('login')}}">Login</a></li>
                <!-- <li class="nav-item" ><a title="Register or Login" href="{{route('register')}}">Register</a></li> -->
              @endif
            @endif
            </ul>
          </nav>
      </div>
    </div>

</head>
<body>
	{{$slot}}
	<script src="{{ asset('assets2/script.js') }}"></script>
	<script src="{{ asset('assets2/shopscript.js') }}"></script>
	<script src="{{ asset('assets2/aboutscript.js') }}"></script>
    @livewireScripts
</body>
</html>
