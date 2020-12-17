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
        <a class="nav-link" href="{{route("home")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"--}}
{{--               aria-expanded="true" aria-controls="collapseTwo">--}}
{{--                <i class="fas fa-fw fa-cog"></i>--}}
{{--                <span>Components</span>--}}
{{--            </a>--}}
{{--            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
{{--                <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                    <h6 class="collapse-header">Custom Components:</h6>--}}
{{--                    <a class="collapse-item" href="buttons.html">Buttons</a>--}}
{{--                    <a class="collapse-item" href="cards.html">Cards</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}

<!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Начало</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{route("material")}}">Сырьё</a>
                <a class="collapse-item" href="{{route("ready-material")}}">Готовые</a>
                <a class="collapse-item" href="{{route("clients")}}">Клиенты</a>
                <a class="collapse-item" href="{{route("agents")}}">Агенты</a>
                <a class="collapse-item" href="{{route("stores")}}">Магазин</a>
                <a class="collapse-item" href="{{route("founders")}}">Учредители</a>
                <a class="collapse-item" href="{{route("cashbox")}}">Касса</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a
            href="{{route("calculation")}}"
            class="nav-link collapsed"
            aria-expanded="true"
        >
            <i class="fas fa-fw fa-calculator"></i>
            <span>Калькуляция</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#manufacturing"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Производство</span>
        </a>
        <div id="manufacturing" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Производство:</h6>
                <a class="collapse-item" href="{{route("production")}}">Производство</a>
                <a class="collapse-item" href="{{route("forecast")}}">Прогноз</a>
                <a class="collapse-item" href="{{route("calendar")}}">Календар</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#trading"
            aria-expanded="true"
            aria-controls="collapseUtilities"
        >
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Торговля</span>
        </a>
        <div
            id="trading"
            class="collapse"
            aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar"
        >
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Торговля:</h6>
                <a class="collapse-item" href="{{route("sale")}}">Продажа</a>
                <a class="collapse-item collapsed" href="{{route("order")}}">Заказ</a>
                <a class="collapse-item" href="{{route("showcase")}}">Витрина</a>
                <a class="collapse-item" href="{{route("refund")}}">Возврат</a>

            </div>
        </div>

        <div
            id="order"
            class="collapse"
            aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar"
        >
            <div class="bg-white py-2 collapse-inner rounded ">
                <h6 class="collapse-header">Заказ:</h6>
                <a class="collapse-item" href="utilities-color.html">Телефон</a>
                <a class="collapse-item" href="#">Электрон магазин</a>
                <a class="collapse-item" href="#">Телеграм бот</a>
                <a class="collapse-item" href="{{route("clients")}}">Агент</a>
                <a class="collapse-item" href="{{route("clients")}}">Мастеры</a>
                <a class="collapse-item" href="{{route("clients")}}">Магазин</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#money"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Деньги</span>
        </a>
        <div id="money" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Деньги:</h6>
                <a class="collapse-item" href="{{route("money-cashbox")}}">Касса</a>
                <a class="collapse-item" href="{{route("payment-exchange")}}">Оплата, обмен</a>
                <a class="collapse-item" href="{{route("income")}}">Другие приходы</a>
                <a class="collapse-item" href="{{route("consumption")}}">Расход</a>
                <a class="collapse-item" href="{{route("write-off")}}">Списание</a>
                <a class="collapse-item" href="{{route("purchase")}}">Покупок</a>
                <a class="collapse-item" href="{{route("debt")}}">Долг</a>
                <a class="collapse-item" href="{{route("price-list")}}">Прайс Лист</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hr"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>HR</span>
        </a>
        <div id="hr" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">HR:</h6>
                <a class="collapse-item" href="utilities-color.html">Сотрудники</a>
                <a class="collapse-item" href="utilities-border.html">Перекличка</a>
                <a class="collapse-item" href="{{route("payment")}}">Зарплата</a>
                <a class="collapse-item" href="{{route("prepayment")}}">Аванс</a>
                <a class="collapse-item" href="{{route("hr-debt")}}">Долг</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#reports"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Отчёты</span>
        </a>
        <div id="reports" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Отчёты:</h6>
                <a class="collapse-item" href="{{route("report-ready")}}">Остаток на готовый</a>
                <a class="collapse-item" href="{{route("report-material")}}">Остаток на сырьё</a>
                <a class="collapse-item" href="{{route("client-debt")}}">Долги клиентов</a>
                <a class="collapse-item" href="{{route("employee-debt")}}">Долги сотрудников</a>
                <a class="collapse-item" href="{{route("showcase")}}">Витрина</a>
                <a class="collapse-item" href="{{route("report_founder")}}">Учредитель</a>
                <a class="collapse-item" href="{{route("profit")}}">Прибыль</a>
                <a class="collapse-item" href="{{route("sales")}}">Оборот</a>
            </div>
        </div>
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
