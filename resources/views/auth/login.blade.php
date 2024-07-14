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
    <div id="particles-js">
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
            <input type="email" name="email" id="email" required autofocus autocomplete="username">
            <label class="user" value="__('Email')">Email</label>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </span><br>
             <!-- Password -->
        <span>
            <i class="fa fa-lock" id="icon"></i>
            <input type="password" name="password" id="password" required autocomplete="current-password">
            <label class="user" value="__('Password')">password</label>
            <i class="fa fa-eye" id="show-password"></i>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </span><br>

        <div class="flex items-center justify-end">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button type="submit" name="submit"> {{ __('Log in') }}</button>
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
{{-- 
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}