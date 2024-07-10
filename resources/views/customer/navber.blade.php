<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="http://127.0.0.1:8000/customer/new-ticket">نظام الدعم الفني</a>
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
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">الرئيسية</div>
                    <a class="nav-link" href="{{ route('customer.create')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"> </i></div>
                        مشكلة جديدة
                    </a>
                    <a class="nav-link collapsed" href="{{ route('customer.show')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i> </div>
                        عرض المشاكل
                    </a>

                </div>
            </div>

        </nav>
    </div>