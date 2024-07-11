<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin</title>
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
</head>

<body class="sb-nav-fixed">

    @include('admin.navber')

    <div id="layoutSidenav_content">
        <main style="font-style: normal;">
            <div class="container-fluid px-4">
                <h1 class="mt-4" style="font-family: 'Alexandria', sans-serif;margin-bottom: 3rem">الرئيسية</h1>
                
                <div class="row" style="display: flex; justify-content: center;    justify-content: space-between;">
                    <div class="col-xl-3 col-md-4" style="width: 33%">
                        <div class="cards card  text-white mb-4"
                            style="background:#dc35462a;border: 1px solid #dc354654">
                            <div class="card-body"
                                style="color: #DC3545;font-size: 20px; font-family: 'Alexandria', sans-serif;">مستعجلة
                            </div>
                            <a class="small text-white stretched-link d-flex justify-content-end align-items-center"
                                style="margin: 7px; margin-left: 1rem" href="{{ route('admin.Urgent') }}"><img
                                    src="{{ url('assets-ticket/img/Group 37.svg') }}" alt=""
                                    style="max-width: 13%"></a>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4" style="width: 33%">
                        <div class="cards card  text-white mb-4"
                            style="background: #ffc82328;border: 1px solid #e1b22652">
                            <div class="card-body"
                                style="color: #E1B226;font-size: 20px; font-family: 'Alexandria', sans-serif;">متوسطة
                            </div>
                            <a class="small text-white stretched-link d-flex justify-content-end align-items-center"
                                style="margin: 7px; margin-left: 1rem" href="{{ route('admin.dangerous') }}"><img
                                    src="{{ url('assets-ticket/img/Group 36.svg') }}" alt=""
                                    style="max-width: 13%"></a>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4" style="width: 33%">
                        <div class="cards card  text-white mb-4"
                        style="background:#0b2fff34;border: 1px solid #2142ff4b">
                        <div class="card-body"
                            style="color: #2C45CE;font-size: 20px; font-family: 'Alexandria', sans-serif;">عادية
                        </div>
                        <a class="small text-white stretched-link d-flex justify-content-end align-items-center"
                            style="margin: 7px; margin-left: 1rem" href="{{ route('admin.normal') }}"><img
                                src="{{ url('assets-ticket/img/Group 35.svg') }}" alt=""
                                style="max-width: 13%"></a>

                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header" style="font-family: 'Alexandria', sans-serif;font-size: 13px">
                                <i class="fas fa-chart-area me-1"></i>
                                الحصائيات
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header" style="font-family: 'Alexandria', sans-serif;font-size: 13px">
                                <i class="fas fa-chart-bar me-1"></i>
                                الحصائيات
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
                <form class="show-ticket">
                    <div class="card mb-4">
                        <div class="card-header" style="font-family: 'Alexandria', sans-serif;font-size: 13px">
                            <i class="fas fa-table me-1"></i>
                            جدول المشكلات
                        </div>
                        @if (session('success'))
                            <alert class="px-2 py-3 mb-4"
                                style="background-color: rgb(0 128 0 / 32%);border-right: 8px solid rgb(9, 97, 9);color: rgb(19, 77, 19);font-weight: bold;margin-right: 0rem;">
                                {{ session('success') }}
                            </alert>
                        @endif
                        <div class="card-body" style="font-family: 'Alexandria', sans-serif;font-size: 13px">
                            <table id="datatablesSimple" style="font-family: 'Alexandria', sans-serif;font-size: 12px">
                                <thead>
                                    <tr>
                                        <th class="ts">رقم </th>
                                        <th class="ts"> أسم المستخدم</th>
                                        <th class="ts">عنوان </th>
                                        <th class="ts">ونوع </th>
                                        <th class="ts">أولوية </th>
                                        <th class="ts">حالة </th>
                                        <th class="ts">وقت وتاريخ </th>
                                        <th class="ts" colspan="3">عرض التفاصيل</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($ticket as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->new_or_repeated }}</td>
                                            <td>{{ $item->severity }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td style="display: flex; gap: 6px">
                                                <button class=""
                                                    style="border-radius: 6px;border: 1px solid #08061c17;width: 100%; font-size: 13px"
                                                    type="button">
                                                    <a href="/admin/edit/{{ $item->id }}"
                                                        style="outline-style: none;color: black;text-decoration: none;">
                                                        <i class="fi fi-br-edit"></i> تعديل
                                                    </a>
                                                </button>
                                                <button class="show-ticket" type="button" value=""
                                                    style="border-radius: 6px;border: 1px solid #08061c17;width: 100%; font-size: 13px"
                                                    onclick="deleteTicket({{ $item->id }})">
                                                    <i class="fi fi-bs-trash"></i> حذف</button>
                                            </td>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            </form>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-center small">
                    <div class="text-muted" style="display: flex;justify-content: center;"><img src="{{ url('assets-ticket/img/Frame.svg') }}" alt=""
                            style="max-width: 30%;"></div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ url('js-ticket/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ url('assets-ticket/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('assets-ticket/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ url('js-ticket/simple-datatables.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ url('js-ticket/datatables-simple-demo.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function deleteTicket(id) {
            if (confirm('سوف يتم حذف  المشكلة نهائيا" ؟')) {
                $.ajax({
                    url: '/tickets/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Reload the page to reflect the updated list of tickets
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Handle the error case, e.g., show an error message
                        console.error(error);
                    }
                });
            }
        }
    </script>
</body>

</html>
