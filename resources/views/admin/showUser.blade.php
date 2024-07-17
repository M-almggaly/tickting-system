<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin</title>
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
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .custom-password-icon {
        color: #6c757d;
        /* Set the default color */
        transition: color 0.3s ease;
        /* Add a smooth transition effect */
    }

    .custom-password-icon.fa-eye-slash {
        color: #dc3545;
        /* Set the color when the password is visible */
    }
</style>

<body class="sb-nav-fixed">

    @include('admin.navber')
    <div id="layoutSidenav_content">
        @if (session('success'))
            <alert class=""
                style="background-color: rgb(0 128 0 / 32%);border-right: 8px solid rgb(9, 97, 9);color: rgb(19, 77, 19);font-weight: bold;margin-right: 18rem;padding: 1rem;margin-left: 3rem;font-style: normal;font-family: 'Alexandria', sans-serif;font-size: 13px">
                {{ session('success') }}
            </alert>
        @endif
        <main style="font-style: normal;display: flex;justify-content: center;margin: 2rem">
            <div
                style="margin-right: 15rem;width: 70%;font-family: 'Alexandria', sans-serif;font-size: 12px;border-radius: 13px;border: 1px solid rgb(0 0 0 / 10%);">
                <table style="border: 1px;">
                    <thead>
                        <tr style="border-bottom: 1px solid rgb(0 0 0 / 10%);cursor: default;">
                            <th class="ts">رقم </th>
                            <th class="ts"> أسم المستخدم</th>
                            <th class="ts">البريد الالكتروني </th>
                            <th class="ts" colspan="3">عرض التفاصيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr style="font-size: 13px" id="popu">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td style="display: flex !important; gap: 8px;!important;justify-content: center">
                                    <button
                                        style="border-radius: 6px;border: 1px solid #08061c17;width: 40%; font-size: 13px"
                                        type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <a href="/user/edit/{{ $user->id }}"
                                            style="outline-style: none;color: black;text-decoration: none;">
                                            <i class="fi fi-br-edit"></i> تعديل
                                        </a>
                                    </button>
                                    <form class="w-full" id="delete-form" action="/user/{{ $user->id }}" method="POST" style="width: 40%">
                                        @csrf
                                        @method('DELETE')
                                        <button class="show-ticket" type="submit" style="border-radius: 6px;border: 1px solid #08061c17;width: 100%; font-size: 13px" onclick="confirmDelete(event)">
                                            <i class="fi fi-bs-trash"></i> حذف
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-center small">
                    <div class="text-muted" style="display: flex;justify-content: center;"><img
                            src="{{ url('assets-ticket/img/Frame.svg') }}" alt="" style="max-width: 30%;">
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ url('tinymce/tinymce.min.js') }}"></script>
    <script src="{{ url('js-ticket/tinymce.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ url('js-ticket/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ url('assets-ticket/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('assets-ticket/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ url('js-ticket/datatables-simple-demo.js') }}"></script>

    <script>
        function confirmDelete(event) {
            event.preventDefault(); // Prevent the form from submitting immediately
    
            if (confirm('هل انت متأكد أنك تريد حذف هذا المستخدم نهائيًا؟')) {
                // If the user confirms, submit the form
                document.getElementById('delete-form').submit();
            }
        }
    </script>
</body>

</html>
