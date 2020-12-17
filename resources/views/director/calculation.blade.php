@extends("layouts.app", ["title" => "Касса"])

@section("content")
    @include("director.sidebar")

    <style>
        .calculation {
            width: 100%;
        }

        .cal-pos {
            position: relative;
            float: right;
            margin-left: 130px;
        }
    </style>
    <div class="container-fluid mt-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Готовые</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Сырьё</th>
                            <th>Кол-во</th>
                            <th>Сумма</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td class="text-center"><span class="fas fa-trash-alt"></span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
