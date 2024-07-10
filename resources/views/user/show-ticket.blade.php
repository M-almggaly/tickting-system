<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>User-Show-Ticket</title>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
        rel="stylesheet" />
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="http://127.0.0.1:8000/customer/new-ticket">النظام التذكرة</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" style="margin-right: 56rem !important;">
            <div class="input-group input-search">
                <input class="form-control" type="text" placeholder="ابحث هنا..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" style="padding: 0;
        margin-left: 2rem !important;">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">{{auth()->user()->name}}</div>
                        <a class="nav-link" href="{{ route('user.create')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"> </i></div>
                            أضافة مشكلة
                        </a>
                        <a class="nav-link collapsed" href="{{ route('user-show-ticket')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i> </div>
                            عرض المشاكل
                        </a>
    
                    </div>
                </div>
    
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">عرض المشاكل</h1>
                    <ol class="breadcrumb mb-4">
                         <li class="breadcrumb-item active">عرض المشاكل</li>
                        <li class="breadcrumb-item">/ <a href="{{ route('user.create')}}">أضافة مشكلة</a></li>
                    </ol>
                </div>
                <form action="" class="grob-ticket show-ticket"
                    style="border: radius 0;;border:0 solid #babbbc; width: 80%;max-width: 80%;margin-left: 6rem;margin-bottom: 2rem;;
                    direction: rtl;">
                    <div class="form-floating">
                        <table>
                            <tr id="headeruser">
                                <th>رقم المشكلة</th>
                                <th>أسم المستخدم</th>
                                <th>عنوان المشكلة</th>
                                <th>نوع المشكلة</th>
                                <th>حالة المشكلة</th>
                                <th>وقت وتاريخ المشكلة</th>
                                <th colspan="3">عرض التفاصيل</th>

                            </tr>
                            <?php $i=1?>
                            @foreach ($ticket as $item)
                                <tr id="popu">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->new_or_repeated }}</td>
                                    <td>{{ $item->severity}}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td style="display: flex"><button class="show-ticket show-modal" type="button" data-id="{{$item->id}}"
                                        style="border-radius: 6px;border: 1px solid #08061c17;width: 70%;margin-left: 10px;"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fi fi-br-edit"></i> تعديل
                                    </button>
                                    <button class="show-ticket" type="button" value=""
                                    style="border-radius: 6px;border: 1px solid #08061c17;width: 70%;margin-left: 10px;"
                                    onclick="deleteTicket({{ $item->id }})">
                                    <i class="fi fi-bs-trash"></i> حذف
                                </button></td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                    <div class="form-floating">
                        <!-- Button trigger modal -->
                        <button type="submit" class="btn btn-primary" name="submit"
                            style="margin-bottom: 25px;">
                          أرسال المشاكل
                        </button>


                    </div>

                </form>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted"><img src="{{ url('assets-ticket/img/Frame.svg') }}" alt=""
                                style="max-width: 30%;"></div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
     <!-- Modal -->
     <div style="direction: rtl;text-align: right" class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">عرض المشكلة</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin: 0"></button>
             </div>
             <div class="modal-body">
             </div>
         </div>
     </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$('.show-modal').on('click', function(e) {
    const ticketId = $(this).data('id');
    $.ajax({
    type: 'POST',
    url: '{{ route("show.ticket") }}',
    data: {
        id: ticketId,
        sever: 1,
        _token: '{{ csrf_token() }}'
    },
    success: function(data) {
        $('.modal-body').html(data);
    },
    error: function(xhr, status, error) {
        console.error('AJAX error:', error);
        console.error('Status:', status);
        console.error('Response:', xhr.responseText);
    }
});
});</script>
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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
      <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <script>
        let profilePic = document.getElementById("profile-pic");
        let inputFileImage = document.getElementById("input-file");
        
        function previewImage(input) {
            if (input.files && input.files[0]) {
                profilePic.src = URL.createObjectURL(input.files[0]);
                let fancyboxLink = profilePic.closest('.fancybox').setAttribute('href', URL.createObjectURL(input.files[0]));
                Fancybox.bind("[data-fancybox]", {
                    infinite: false
                });
            }
        }
        </script>

</body>

</html>
