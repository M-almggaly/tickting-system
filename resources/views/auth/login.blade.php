<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>login</title>
     {{-- شعار الصفحه --}}
     <link href="{{ url('lgindex/img/Vector.svg') }}" rel="icon">
     <link href="{{ url('lgindex/img/Vector.svg') }}" rel="apple-touch-icon"> 
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100..900&display=swap" rel="stylesheet">
     
    <link href="{{ url('lgindex/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('lgindex/bootstrap/js/jquery-3.6.1.min.js') }}" rel="stylesheet">
    <link href="{{ url('lgindex/bootstrap/js/bootstrap.js') }}" rel="stylesheet">
    <link href="{{ url('lgindex/bootstrap/js/popper.min.js') }}">
    <link rel="stylesheet" href="{{ url('lgindex/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('lgindex/style.css') }}">
</head>

<body>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div id="particles-js" style="font-family: 'Alexandria', sans-serif">
        <div class="container">
            <div class="login">
                <div class="header">
                    <img src="{{ url('lgindex/img/logo-index.svg') }}" style="width: 27% !important">
                </div>
                <div class="main">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <span>
            <i class="fa fa-user" id="icon"></i>
            <input type="email" name="email" id="email" required autofocus autocomplete="username" placeholder="Enter your Email" style="color: black">
            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: #fff" />
        </span><br>
             <!-- Password -->
        <span>
            <i class="fa fa-lock" id="icon"></i>
            <input type="password" name="password" id="password" required autocomplete="current-password" placeholder="Enter your password">
            <i class="fa fa-eye" id="show-password"></i>
            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: #fff"/>
        </span><br>

        <div class="flex items-center justify-end">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500;" href="{{ route('password.request') }}" style="color: #fff;font-family: 'Alexandria', sans-serif">
                    {{ __('نسيت كلمة السر؟') }}
                </a>
            @endif

            <button type="submit" name="submit"> {{ __('تسجيل الدخول') }}</button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
<script src="{{ url('/lgindex/particles.js') }}"></script>
<script src="{{ url('lgindex/app.js') }}"></script>
<script src="{{ url('lgindex/script.js') }}"></script>
</body>
</html>
