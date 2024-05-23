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
        <a class="navbar-brand ps-3" href="index.html">Tickting System</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"
            href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..."
                    aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fas fa-user fa-fw"></i></a>
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
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="http://127.0.0.1:8000/customer/new-ticket">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            New Ticket
                        </a>
                        <a class="nav-link collapsed" href="http://127.0.0.1:8000/user/show-ticket" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages" aria-expanded="false"
                            aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Show Ticket
                        </a>

                    </div>
                </div>
               
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Show Tickting</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/customer/customer">New Tickting</a></li>
                        <li class="breadcrumb-item active">Show Tickting</li>
                    </ol>
                </div>
                <form action="" class="grob-ticket show-ticket"
                    style="border: radius 0;;border:0 solid #babbbc; width: 80%;max-width: 80%;margin-left: 6rem;margin-bottom: 2rem;;
                    direction: ltr;">
                    <div class="form-floating">
                        <table>
                            <tr id="headeruser">
                                <th>Ticket_ID</th>
                                <th>User Name</th>
                                <th>Ticket_Title</th>
                                <th>Time and date</th>
                                <th colspan="3">View Details</th>

                            </tr>
                            <?php $i=1?>
                            @foreach ($ticket as $item)
                            <tr id="popu">
                                <td>{{$i++}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->created_at}}</td>
                                <td colspan="3" style="display: flex;">
                                    <button class="show-ticket" type="button" value=""
                                        style="border-radius: 6px;border: 1px solid #08061c17;width: 70%;margin-left: 10px;"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fi fi-br-edit"></i> Edit</button>
                                    <button class="show-ticket" type="button" value=""
                                        style="border-radius: 6px;border: 1px solid #08061c17;width: 70%;margin-left: 10px;"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fi fi-bs-trash"></i> Delete</button>
                                </td>
                            </tr>
                            @endforeach

                        </table>
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
     <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 ......
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Understood</button>
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
</body>

</html>
