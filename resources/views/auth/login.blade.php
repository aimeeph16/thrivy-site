<x-guest-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets2/formstyle.css">
    
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Responsive Login Form Sign In Sign Up</title>

        <div class="home">
            <div class="top">
                <div class="flex-row">
                    <img class="thrivy-logoyelo" src="assets2/images/thrivy logo_yelo.png"/>             
                    <div class="thrivy museosansrounded900-regular-normal-white-18px">
                    <b>FORM</b>
                </div>
            </div>
        </div>

        <div class="exit">
            <a href="/">
                <button class="exit-button">
                <!--<i class="fa fa-close"></i>-->
                <img class="exit-btn" src="{{ asset('assets2/images/exit.png') }}"/>
            </button>
            </a>
        </div>

    </head>
    <body>
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="assets2/images/login-register.svg" alt="">
                </div>

                <div class="login__forms">
                    <x-jet-validation-errors class="mb-4" />
                    <form method="POST" action="{{route('login')}}" class="login__registre" id="login-in">
                        @csrf
                        <h1 class="login__title">Sign In</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="email" name="email" placeholder="Email" :value="old('email')" required autofocus>
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
                        </div>

                        <a href="#" class="login__forgot">Forgot password?</a>
			
			            <input type="submit" value="Login" class="login__button" />
                        <!-- <a href="#" class="login__button">Sign In</a> -->

                        <div>
                            <span class="login__account">Don't have an Account ?</span>
                            <a href="{{route('register')}}" class="login__signin" id="sign-up">Sign Up</span>
                        </div>
                    </form>

                    </form>
                </div>
            </div>
        </div>

        <!--===== MAIN JS =====
        <script src="login.js"></script>-->

</x-guest-layout>

