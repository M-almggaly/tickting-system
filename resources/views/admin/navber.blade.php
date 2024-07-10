
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">نظام الدعم الفني</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" style="margin-right: 56rem !important;">
        <div class="input-group input-search">
            <input class="form-control" type="search" placeholder="أبحث هنا ..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
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
                    <a class="nav-link" href="{{ route('admin.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        الرئيسية
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        الصفحات
                        <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('admin.Urgent')}}"><i class="fi fi-br-triangle-warning"> مستعجلة</i></a>
                            <a class="nav-link" href="{{ route('admin.dangerous')}}"><i class="fi fi-sr-engine-warning"> متوسطة</i></a>
                            <a class="nav-link" href="{{ route('admin.normal')}}"><i class="fi fi-ts-engine-warning"> عادية</i></a>
                        </nav>
                    </div>
                    <div class="" id="" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"><i class="fi fi-sr-users-alt" style="    margin-left: 0.8rem;margin-right: 0.5rem;"></i> 
                                أضافة مستخدمين
                                <div class="sb-sidenav-collapse-arrow"><i class=""></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('admin.login')}}">أضافة مستخدم</a>
                                    <a class="nav-link" href="">عرض المستخدمين</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">الاضافات</div>
                    <a class="nav-link" href="{{ route('admin.charts')}}"  style="font-style: normal">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        الحصائيات
                    </a>
                    <a class="nav-link" href="{{ route('admin.tables')}}"  style="font-style: normal">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        جدول المشكلات
                    </a>
                    <a class="nav-link" href="{{ route('admin.nwe-reply')}}"  style="font-style: normal">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                       الردود على المشاكل
                    </a>
                </div>
            </div>
        
        </nav>
    </div>