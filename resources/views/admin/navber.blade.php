<link rel='stylesheet'
    href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-straight/css/uicons-regular-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel='stylesheet'
    href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-straight/css/uicons-regular-straight.css'>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{ route('admin') }}" style="width: 20% !important;"><img
            src="{{ url('lgindex/img/logo-hedar.svg') }}" alt="..."
            style="max-width: 90%;margin-top: 1rem;margin-bottom: 1rem"></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <div class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4"
        style="padding: 0;justify-content: end;width: 100%;margin-left: 2rem !important;">
        <div class="nav-item dropdown" style="background: #fff3;border-radius: 100%;padding: 0.7rem;">
            <a style="color: #ffffffc2"
                data-bs-toggle="dropdown" >
                <i class="fas fa-user fa-fw"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="padding-top: 0;right: auto;">
              
                    <div style="text-align: center;">
                        <div
                            style="height: 13vh; display: flex;justify-content: center;background: #0003; position: static;">
                            <div style="position: absolute; ;border-radius: 51px; background: #2d467e;width: 21%; height: 27%; top: 2.7rem;"><i class="fas fa-user fa-fw" style="color: #fff;margin-top: 1rem"></i></div>
                        </div></div>
                        <div style="padding: 4rem;padding-top: 2rem;padding-bottom: 2rem; text-align: center">
                        <h5 style="margin-bottom: auto;">{{ auth()->user()->name?? '' }}</h5>
                        <h6>{{ auth()->user()->email ?? ''}}</h6>
                    </div>
                
            </ul>
        </div>
    </div>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav" style="margin-top: 6rem">
                    <a class="nav-link" href="{{ route('admin') }}"
                        style="font-family: 'Alexandria', sans-serif;font-size: 14px">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        الرئيسية
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                        style="font-family: 'Alexandria', sans-serif;font-size: 14px">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        الصفحات
                        <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordionPages"
                        style="font-family: 'Alexandria', sans-serif;font-size: 14px;margin-right: 0.6rem;">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('admin.Urgent') }}"><i class="fi fi-rr-triangle-warning">
                                    مستعجلة</i></a>
                            <a class="nav-link" href="{{ route('admin.dangerous') }}"><i
                                    class="fi fi-rs-octagon-exclamation"> متوسطة</i></a>
                            <a class="nav-link" href="{{ route('admin.normal') }}"><i class="fi fi-rs-exclamation">
                                    عادية</i></a>
                        </nav>
                    </div>
                    <div class="" id="" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion"
                        style="font-family: 'Alexandria', sans-serif;font-size: 14px">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                aria-controls="pagesCollapseAuth"><i class="fi fi-sr-users-alt"
                                    style="    margin-left: 0.8rem;margin-right: 0.5rem;"></i>
                                أضافة مستخدمين
                                <div class="sb-sidenav-collapse-arrow"><i class=""></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                data-bs-parent="#sidenavAccordionPages"
                                style="font-family: 'Alexandria', sans-serif;font-size: 14px;font-style: normal;margin-right: 0.6rem;">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('user.create') }}">أضافة مستخدم</a>
                                    <a class="nav-link" href="{{ route('showUser') }}">عرض المستخدمين</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                   
                    {{-- <a class="nav-link" href="{{ route('admin.charts')}}"  style="font-family: 'Alexandria', sans-serif;font-size: 14px;font-style: normal">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        الحصائيات
                    </a> --}}
                    <a class="nav-link" href="{{ route('admin.tables') }}"
                        style="font-family: 'Alexandria', sans-serif;font-size: 14px;font-style: normal">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        جدول المشكلات
                    </a>
                    {{-- <a class="nav-link" href="{{ route('admin.nwe-reply')}}" style="font-family: 'Alexandria', sans-serif;font-size: 14px;font-style: normal">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                       الردود على المشاكل
                    </a> --}}
                </div>
            </div>

        </nav>
    </div>
