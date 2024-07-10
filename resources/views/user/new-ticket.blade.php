<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>New-Ticket</title>
    <link href="https://fontawesome.com/icons/spinner?f=classic&s=solid&an=spin-pulse" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">نظام الدعم الفني</a>
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
                        <div class="sb-sidenav-menu-heading">الرئيسية</div>
                        <a class="nav-link" href="{{ route('user.create')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"> </i></div>
                            مشكلة جديدة
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
                <div class="container-fluid px-4" style="padding-right: 15.5rem !important;">
                    <h1 class="mt-4">المشكلة جديدة</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">المشكلة جديدة</li>
                    </ol>

                    {{-- The beginning of the form in which the customer enters problem data --}}
                    <form id="forms" class="grob-ticket " action="{{ route('new-ticket.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating">
                            <input type="text" class="title form-control" id="title" name="title"
                                placeholder="title" required>
                            <label for="title">عنوان المشكلة</label>
                        </div>

                        <div class="form-floating">
                            <textarea class="summery form-control" placeholder="Leave a comment here" id="summery" name="summery" required></textarea>
                            <label for="summery">نبذة عن المشكلة</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="build form-control" placeholder="Leave a comment here" id="build" name="build" required></textarea>
                            <label for="build">مكان المشكلة</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="steps form-control" placeholder="Leave a comment here" id="steps" name="steps" required></textarea>
                            <label for="steps">خطوات المشكلة</label>
                        </div>
                        <div class="result"
                            style="display: flex;justify-content: flex-start;flex-direction: row;width: 100%;">
                            <div class="form-floating">
                                <input type="text" class="expected form-control" id="expected" name="expected"
                                    placeholder="text" required>
                                <label for="expected">النتيجة المتوقعة</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="actual form-control" id="actual" name="actual"
                                    placeholder="text" required>
                                <label for="actual">النتيجة الفعلية</label>
                            </div>
                        </div>
                        <div class="form-floating d-flex justify-content-between">
                            <div class="w-50 me-1">
                                <label for="input-file" style="display: flex;align-items: center;flex-direction: column;">
                                    <a href="#" class="fancybox" data-fancybox="gallery">
                                        <img src="{{ asset('assets-ticket/img/svgexport-17 (1).svg') }}" id="profile-pic" class="rounded me-2" alt="..." style="width: 89%;
                                        height: 25vh;">
                                    </a>
                                  <div style="margin-top: 5px; border: 1px solid rgba(74, 74, 246, 0.603); border-radius: 4px">Upload Image</div>
                                </label>
                                <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file" name="img" class="form-control d-none" required onchange="previewImage(this)">
                            </div>
                        </div>

                        <div class="form-floating">
                            <input class="deprartment form-control" list="datalistOptions" id="deprartment"
                                name="deprartment" placeholder="text" required>
                            <label for="deprartment">القسم</label>
                            <datalist id="datalistOptions">
                                @foreach ($departments as $item)
                                    <option value="{{$item->name}}"></option>
                                @endforeach
                            </datalist>
                        </div>
                        <div class="form-floating">
                            <div class="form-check form-switch ">
                                <input class="reparted form-check-input" type="checkbox" id="reparted"
                                    name="reparted">
                                <label class="form-check-label" style="margin-right: 3rem;" for="reparted">
                                    حدثت من قبل</label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <textarea id="default" name="support"></textarea>
                        </div>
                        <div class="form-floating">
                            <!-- Button trigger modal -->
                            <button type="submit" class="btn btn-primary" name="submit"
                                style="margin-bottom: 25px;display:flex; align-items: center">
                               أرسال <i id="preloader" class="fa-solid fa-spinner fa-spin-pulse" style="margin-right: 0.8rem"></i>
                            </button>


                        </div>
                    </form>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" style="margin-top: 11rem;" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body"
                                    style="display: flex;justify-content: space-around;
                            flex-direction: column;
                            align-items: center; ">
                                    <img style="width: 30%;" src="{{ url('assets-ticket/img/verified.gif') }}"
                                        alt="">
                                    <h4>تم الارسال بنجاح</h4>
                                </div>
                                <div class="modal-footer">
                                    <form><button type="submit" class="btn btn-secondary"
                                            data-bs-dismiss="modal">OK</button></form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            {{-- end form --}}

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
    <script>
        $(document).ready(function() {
            $("#forms").submit(function(e) {
                e.preventDefault(); // Prevent default form submission

                var formData = new FormData(this); // Create FormData object

                $.ajax({
                    type: "POST",
                    url: "{{ route('new-ticket.store') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            $('#staticBackdrop').modal('show');
                        } else {
                            // Handle failure case (e.g., display error message using response data)
                            console.error(response.message); // Log error message for debugging
                            alert(
                                "An error occurred. Please try again."
                            ); // Inform user about the error
                        }
                    },
                    error: function(error) {
                        console.error(error); // Log error for debugging
                        alert(
                            "An unexpected error occurred. Please try again."
                        ); // Inform user about the error
                    }
                });
            });
        });
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
