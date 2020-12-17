@extends("layouts.app", ["title" => "Долг"])

@section("hr-debt")
    @include("layouts.sidebar")
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60"
                                         alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem
                                        I've been having.
                                    </div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60"
                                         alt="">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how would
                                        you
                                        like them sent to you?
                                    </div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60"
                                         alt="">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with the
                                        progress so far, keep up the good work!
                                    </div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                         alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told
                                        me
                                        that people say this to all dogs, even if they aren't good...
                                    </div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>

            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2 class="h5 mb-0">Долг</h2>
                    </div>

                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="form-group col-sm">
                                <label for="ready">Кадр</label>
                                <select
                                    name="cadre"
                                    id="cadre"
                                    class="form-control"
                                >
                                    <option value="1">Test1</option>
                                    <option value="2">Test2</option>
                                    <option value="3">Test3</option>
                                </select>
                            </div>
                            <div class="form-group col-sm">
                                <label for="ready">Денег</label>
                                <select
                                    name="currency"
                                    id="currency"
                                    class="form-control"
                                >
                                    <option value="1">dollar</option>
                                    <option value="1">rub</option>
                                    <option value="1">sum</option>
                                </select>
                            </div>
                            <div class="form-group col-sm">
                                <label for="sum">Сумма</label>
                                <input type="text" class="form-control" name="sum">
                            </div>
                            <div class="form-group col-sm">
                                <label for="date">Число</label>
                                <input type="date" class="form-control" name="date">
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button
                                type="submit"
                                class="btn btn-success"
                            >
                                Добавить
                            </button>
                    </div>
                    </div>
                </div>
                <br>

                <button
                    class="btn btn-danger mt-2"
                >
                    Синхронизация
                </button>

                <div
                    class="myTable"
                    style="margin-top: 20px;"
                >
                    <div class="card shadow mb-4 mt-3">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Долг</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th rowspan="2" class="text-center">#</th>
                                        <th class="text-center">Вводил</th>
                                        <th class="text-center">Кадр</th>
                                        <th class="text-center">Деньги</th>
                                        <th class="text-center">Сумма</th>
                                        <th class="text-center">Число</th>
                                        <th rowspan="2" class="text-center">Действия</th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <select
                                                name="ready"
                                                id="ready"
                                                class="form-control"
                                            >
                                                <option value=""></option>
                                            </select>
                                        </th>
                                        <th>
                                            <select
                                                name="ready"
                                                id="ready"
                                                class="form-control"
                                            >
                                                <option value=""></option>
                                            </select>
                                        </th>
                                        <th></th>
                                        <th></th>
                                        <th>
                                            <input type="date" class="form-control">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr
                                        class="bg-danger text-center"
                                        style="opacity: 0.3; color: black;"
                                    >
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Test 1</td>
                                        <td class="text-center">Кадр 1</td>
                                        <td class="text-center">100 000</td>
                                        <td class="text-center">100 000</td>
                                        <td class="text-center">2020/02/08</td>
                                        <td class="text-center">
                                            <button class="btn btn-danger">
                                                <span class="fas fa-trash-alt"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">Test 2</td>
                                        <td class="text-center">Кадр 2</td>
                                        <td class="text-center">200 000</td>
                                        <td class="text-center">250 000</td>
                                        <td class="text-center">2020/01/01</td>
                                        <td class="text-center">
                                            <button class="btn btn-danger">
                                                <span class="fas fa-trash-alt"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">Test 3</td>
                                        <td class="text-center">Кадр 3</td>
                                        <td class="text-center">300 000</td>
                                        <td class="text-center">350 000</td>
                                        <td class="text-center">2020/01/02</td>
                                        <td class="text-center">
                                            <button class="btn btn-danger">
                                                <span class="fas fa-trash-alt"></span>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection