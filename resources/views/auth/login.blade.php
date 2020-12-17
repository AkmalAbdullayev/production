@extends('layouts.auth')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Menu : </h1>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{route("home")}}" target="_blank">
                                <button
                                    class="btn btn-primary border-0"
                                    style="font-size: 20px;"
                                >
                                    Admin
                                </button>
                            </a>
                            <a href="{{route("director")}}" target="_blank">
                                <button
                                    class="btn btn-primary border-0"
                                    style="font-size: 20px;"
                                >
                                    Директор
                                </button>
                            </a>
                            <a href="{{route("founder")}}" target="_blank">
                                <button
                                    class="btn btn-primary border-0"
                                    style="font-size: 20px;"
                                >
                                    Учредитель
                                </button>
                            </a>
                            <a href="{{route("agent")}}" target="_blank">
                                <button
                                    class="btn btn-primary border-0"
                                    style="font-size: 20px;"
                                >
                                    Агент
                                </button>
                            </a>
                            <a href="{{route("stock")}}" target="_blank">
                                <button
                                    class="btn btn-primary border-0"
                                    style="font-size: 20px;"
                                >
                                    Склад
                                </button>
                            </a>
                            <a href="{{route("seller")}}" target="_blank">
                                <button
                                    class="btn btn-primary border-0"
                                    style="font-size: 20px;"
                                >
                                    Продавец
                                </button>
                            </a>
                            <a href="{{route("store")}}" target="_blank">
                                <button
                                    class="btn btn-primary border-0"
                                    style="font-size: 20px;"
                                >
                                    Магазин
                                </button>
                            </a>
                        </div>
                        {{--                    <form method="POST" action="{{ route('login') }}" class="user w-75 m-auto py-5">--}}
                        {{--                        @csrf--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Enter Email Address..." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

                        {{--                            @error('email')--}}
                        {{--                            <span class="invalid-feedback" role="alert">--}}
                        {{--                                <strong>{{ $message }}</strong>--}}
                        {{--                            </span>--}}
                        {{--                            @enderror--}}
                        {{--                        </div>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

                        {{--                            @error('password')--}}
                        {{--                            <span class="invalid-feedback" role="alert">--}}
                        {{--                                <strong>{{ $message }}</strong>--}}
                        {{--                            </span>--}}
                        {{--                            @enderror--}}
                        {{--                        </div>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <button type="submit" class="btn btn-primary btn-user btn-block"> Login </button>--}}
                        {{--                        </div>--}}
                        {{--                    </form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
