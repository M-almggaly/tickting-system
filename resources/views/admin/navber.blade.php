<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-straight/css/uicons-regular-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-straight/css/uicons-regular-straight.css'>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html" style="font-family: 'Alexandria', sans-serif;">نظام الدعم الفني</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <div class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" style="padding: 0;
    margin-left: 2rem !important;">
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"><i class="fas fa-user fa-fw"></i></a>
        </div>
    </div>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{ route('admin') }}" style="font-family: 'Alexandria', sans-serif;font-size: 14px">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        الرئيسية
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages" style="font-family: 'Alexandria', sans-serif;font-size: 14px">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        الصفحات
                        <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages" style="font-family: 'Alexandria', sans-serif;font-size: 14px">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('admin.Urgent')}}"><i class="fi fi-rr-triangle-warning"> مستعجلة</i></a>
                            <a class="nav-link" href="{{ route('admin.dangerous')}}"><i class="fi fi-rs-octagon-exclamation"> متوسطة</i></a>
                            <a class="nav-link" href="{{ route('admin.normal')}}"><i class="fi fi-rs-exclamation"> عادية</i></a>
                        </nav>
                    </div>
                    <div class="" id="" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion"  style="font-family: 'Alexandria', sans-serif;font-size: 14px">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"><i class="fi fi-sr-users-alt" style="    margin-left: 0.8rem;margin-right: 0.5rem;"></i> 
                                أضافة مستخدمين
                                <div class="sb-sidenav-collapse-arrow"><i class=""></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages"  style="font-family: 'Alexandria', sans-serif;font-size: 14px">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('admin.login')}}">أضافة مستخدم</a>
                                    <a class="nav-link" href="">عرض المستخدمين</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading"  style="font-family: 'Alexandria', sans-serif;font-size: 11px">الاضافات</div>
                    <a class="nav-link" href="{{ route('admin.charts')}}"  style="font-family: 'Alexandria', sans-serif;font-size: 14px;font-style: normal">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        الحصائيات
                    </a>
                    <a class="nav-link" href="{{ route('admin.tables')}}"  style="font-family: 'Alexandria', sans-serif;font-size: 14px;font-style: normal">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        جدول المشكلات
                    </a>
                    <a class="nav-link" href="{{ route('admin.nwe-reply')}}" style="font-family: 'Alexandria', sans-serif;font-size: 14px;font-style: normal">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                       الردود على المشاكل
                    </a>
                </div>
            </div>
        
        </nav>
    </div>