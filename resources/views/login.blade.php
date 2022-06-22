@extends('layouts.auth')
@section('container')
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0 vh-100">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="p-4 rounded">
                                    <div class="text-center">
                                        <img src="assets/img/logo.png" width="50" class="mb-3" />
                                        <h3 class="">Sign in</h3>
                                        @if ($errors->any())
                                            <h4>{{ $errors->first() }}</h4>
                                        @endif
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" action="/actionLogin" method="post">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <input type="email" class="form-control " name="email"
                                                    placeholder="Email Address">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputPassword" class="form-label">Enter Password</label>
                                                <input type="password" class="form-control " name="password"
                                                    placeholder="Enter Password">
                                            </div>
                                            <div class="text-end"> <a href="/forgot">Forgot Password ?</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary rounded-pill">Sign
                                                        in</button>
                                                </div>
                                            </div>
                                            <p>Don't have an account? <a href="/register">Sign up here</a>
                                            </p>
                                            {{ method_field('POST') }}
                                            {{ csrf_field() }}
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
