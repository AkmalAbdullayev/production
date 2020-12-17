@extends("layouts.app", ['title' => 'Калькуляция'])

@section("calculation")
    @include("layouts.sidebar")
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container-fluid mt-2">
            <h2 class="mb-3">Готовые</h2>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Готовые</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Готовый</th>
                                <th>Кол-во</th>
                                <th>Сумма</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Готовый 1</td>
                                <td>Edinburgh</td>
                                <td>720 000</td>
                                <td
                                    class="text-center"
                                >
                                    <button
                                        class="fas fa-trash-alt border-0 btn btn-danger"
                                        type="button"
                                        style="font-size: 15px;"
                                    >
                                    </button>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td>Готовый 2</td>
                                <td>Edinburgh</td>
                                <td>501 000</td>
                                <td
                                    class="text-center"
                                >
                                    <button
                                        class="fas fa-trash-alt border-0 btn btn-danger"
                                        type="button"
                                        style="font-size: 15px;"
                                    >
                                    </button>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td>Готовый 3</td>
                                <td>Edinburgh</td>
                                <td>400 000</td>
                                <td
                                    class="text-center"
                                >
                                    <button
                                        class="fas fa-trash-alt border-0 btn btn-danger"
                                        type="button"
                                        style="font-size: 15px;"
                                    >
                                    </button>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>4</td>
                                <td>Готовый 4</td>
                                <td>Edinburgh</td>
                                <td>300 000</td>
                                <td
                                    class="text-center"
                                >
                                    <button
                                        class="fas fa-trash-alt border-0 btn btn-danger"
                                        type="button"
                                        style="font-size: 15px;"
                                    >
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

@endsection

@section("r_material")
    <div class="container-fluid mt-2">
        <h2 class="mb-3">Касса</h2>
        <div class="row">
            <div class="form-group col-sm">
                <input type="text" class="form-control" name="material" placeholder="Сырьё">
            </div>
            <div class="form-group col-sm">
                <input type="text" class="form-control" name="amount" placeholder="Кол-во">
            </div>
        </div>

        <div class="form-group">
            <input type="text" name="sum" placeholder="Сумма" class="form-control">
        </div>

        <div class="d-flex justify-content-center">
            <button
                class="btn btn-success mb-4"
            >
                Добавить
            </button>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Касса</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Сырьё</th>
                            <th>Кол-во</th>
                            <th>Сумма</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-center">
                            <td>1</td>
                            <td class="text-primary font-weight-bold">Сырьё 1</td>
                            <td class="text-primary font-weight-bold">12</td>
                            <td class="text-primary font-weight-bold">300 000</td>
                            <td
                                class="text-center"
                            >
                                <button
                                    class="fas fa-trash-alt border-0 btn btn-danger"
                                    type="button"
                                    data-toggle="modal"
                                    data-target="#showModal"
                                    style="font-size: 15px;"
                                >
                                </button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>2</td>
                            <td class="text-primary font-weight-bold">Сырьё 2</td>
                            <td class="text-primary font-weight-bold">80</td>
                            <td class="text-primary font-weight-bold">700 000</td>
                            <td
                                class="text-center"
                            >
                                <button
                                    class="fas fa-trash-alt border-0 btn btn-danger"
                                    type="button"
                                    style="font-size: 15px;"
                                >
                                </button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>3</td>
                            <td class="text-primary font-weight-bold">Сырьё 3</td>
                            <td class="text-primary font-weight-bold">42</td>
                            <td class="text-primary font-weight-bold">550 000</td>
                            <td
                                class="text-center"
                            >
                                <button
                                    class="fas fa-trash-alt border-0 btn btn-danger"
                                    type="button"
                                    style="font-size: 15px;"
                                >
                                </button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>4</td>
                            <td class="text-primary font-weight-bold">Сырьё 4</td>
                            <td class="text-primary font-weight-bold">55</td>
                            <td class="text-primary font-weight-bold">600 000</td>
                            <td
                                class="text-center"
                            >
                                <button
                                    class="fas fa-trash-alt border-0 btn btn-danger"
                                    type="button"
                                    style="font-size: 15px;"
                                >
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="container mt-5">
                        <div class="calculation">
                            <p class="h4">Сырьё : <span class="cal-pos">170.11</span></p>
                            <p class="h4">%20 : <span class="cal-pos">41.42</span></p>
                            <p class="h4">Себестоимость:$ : <span class="cal-pos">170.11</span></p>
                            <p class="h4">Сум : <span class="cal-pos">170.11</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Удалить</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Удалить</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
@endsection
