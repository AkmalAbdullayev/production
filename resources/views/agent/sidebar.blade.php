<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route("agent")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->

    <li class="nav-item">
        <a
            href="{{route("clients")}}"
            class="nav-link collapsed"
            aria-expanded="true"
        >
            <i class="fas fa-fw fa-cash-register"></i>
            <span>Клиенты</span>
        </a>
    </li>

    <li class="nav-item">
        <a
            class="nav-link collapsed"
            href="{{route("sale")}}"
{{--            data-toggle="collapse"--}}
{{--            data-target="#reports"--}}
{{--            aria-expanded="true"--}}
{{--            aria-controls="collapseUtilities"--}}
        >
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Продажа</span>
        </a>
{{--        <div id="reports" class="collapse" aria-labelledby="headingUtilities"--}}
{{--             data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <h6 class="collapse-header">Отчёты:</h6>--}}
{{--                <a class="collapse-item" href="utilities-color.html">Остаток на готовый</a>--}}
{{--                <a class="collapse-item" href="utilities-border.html">Остаток на сырьё</a>--}}
{{--                <a class="collapse-item" href="{{route("clients")}}">Долги клиентов</a>--}}
{{--                <a class="collapse-item" href="{{route("clients")}}">Долги сотрудников</a>--}}
{{--                <a class="collapse-item" href="{{route("clients")}}">Витрина</a>--}}
{{--                <a class="collapse-item" href="{{route("clients")}}">Прибыль</a>--}}
{{--                <a class="collapse-item" href="{{route("clients")}}">Оборот</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </li>

    <li class="nav-item">
        <a
            href="{{route("report-ready")}}"
            class="nav-link collapsed"
            aria-expanded="true"
        >
            <i class="fas fa-fw fa-cash-register"></i>
            <span>Остаток на готовый</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
           aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
