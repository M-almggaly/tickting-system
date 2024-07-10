<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>login</title>
    <link href="{{ url('login/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('login/bootstrap/js/jquery-3.6.1.min.js') }}" rel="stylesheet">
    <link href="{{ url('login/bootstrap/js/bootstrap.js') }}" rel="stylesheet">
    <link href="{{ url('login/bootstrap/js/popper.min.js') }}">
    <link rel="stylesheet" href="{{ url('login/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('login/style.css') }}">
</head>

<body>
    <div id="particles-js">
        <div class="container">
            <div class="login">
                <div class="header">
                    <img src="{{ url('login/img/Group 34.svg') }}" style="width: 27% !important">
                </div>
                <div class="main">
                    <form method="" action="">
                        @csrf
                        <span>
                            <i class="fa fa-user" id="icon"></i>
                            <input name="username" id="username" required>
                            <label class="user">Username</label>
                        </span><br>
                        <span>
                            <i class="fa fa-lock" id="icon"></i>
                            <input type="password" name="password" id="password" required>
                            <label class="user">password</label>
                            <i class="fa fa-eye" id="show-password"></i>
                        </span><br>
                        <button type="submit" name="submit">SIGN IN</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('/login/particles.js') }}"></script>
    <script src="{{ url('login/app.js') }}"></script>
    <script src="{{ url('login/script.js') }}"></script>
</body>

</html>
