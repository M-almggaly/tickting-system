<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin-Edit</title>
     {{-- شعار الصفحه --}}
     <link href="{{ url('lgindex/img/Vector.svg') }}" rel="icon">
     <link href="{{ url('lgindex/img/Vector.svg') }}" rel="apple-touch-icon"> 
     
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100..900&display=swap" rel="stylesheet">
    <link href="{{ url('js-ticket/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('bootstrap-5.0.2-dist-ticket/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('bootstrap-5.0.2-dist-ticket/js/bootstrap.min.js') }}">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('admin.navber')
    <div id="layoutSidenav_content" style="font-family: 'Alexandria', sans-serif;font-size: 13px">
        <main style="font-style: normal;">
            <div class="container-fluid px-4" style="margin-top: 7rem">
                <div class="modal-body">
                    <form style="font-style: normal;margin: 0 7rem;" method="POST" action="{{ route('user.update', $user->id) }}"> 
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$user->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">كلمة السر الجديدة</label>
                            <div class="input-group">
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" style="border-top-left-radius: 0;border-bottom-left-radius: 0;border-radius: 4px;">
                              <span class="input-group-text" id="password-toggle" style="border-radius: 7px; border-top-right-radius: inherit;border-bottom-right-radius: inherit;">
                               <i class="fas fa-eye"></i>
                              </span>
                            </div>
                          </div>
                     
                </div>
                <div class="" style="margin-left: 7rem;margin-right: 7rem;text-align: end; display: flex;gap:10px;justify-content: end"> 
                    <button type="button" class="btn btn-secondary"
                        style="margin-bottom: 3rem;border-radius: 4px;width: 15%;background: #F4F4F4;color: black;border: none" onclick="navigateToSecondPage()">الغاء</button>
                <button type="submit" class="btn btn-secondary"
                    style="margin-bottom: 3rem;background: #0275D8;border:none;border-radius: 4px;width: 15%;">حفظ</button>
              
            </div>
             </form>
            </div>
        </main>
    </div>
    <script>
        const passwordInput = document.getElementById('exampleInputPassword1');
        const passwordToggle = document.getElementById('password-toggle');
        const passwordIcon = passwordToggle.querySelector('.custom-password-icon');
      
        let isPasswordVisible = false;
      
        passwordToggle.addEventListener('click', () => {
          isPasswordVisible = !isPasswordVisible;
      
          if (isPasswordVisible) {
            passwordInput.type = 'text';
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
          } else {
            passwordInput.type = 'password';
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
          }
        });
      </script>
    <script>
        function navigateToSecondPage() {
          window.location.href = "{{ route('showUser') }}";
        }
      </script>
</body>
</html>