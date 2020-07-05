@extends('admin.layouts.auth')

@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-6 ">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            @include('layouts.notify')
                            <form class="user" method="post" action="{{ route('admin.auth') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="access" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" value="{{ old('access') }}" placeholder="Enter Email or Phone" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="secret" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
