@extends('layouts.auth')
@section('container')
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0 vh-100">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="p-4 rounded">
                                    <div class="text-center">
                                        <img src="assets/img/logo.png" width="50" class="mb-3" />
                                        <h3 class="">Sign Up</h3>
                                    </div>
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger my-auto">
                                            <ul class="my-auto">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-body">
                                        <form class="row g-3" action="/actionRegister" method="post">
                                            @csrf
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control " name="nama"
                                                    placeholder="Nama Lengkap">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email</label>
                                                <input type="text" class="form-control " name="email"
                                                    placeholder="Email Address">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Alamat</label>
                                                <input type="text" name="alamat" class="form-control"
                                                    id="inputChoosePassword" placeholder="Alamat">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Enter Password">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    placeholder="Confirm Password">
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary rounded-pill">Sign
                                                        Up</button>
                                                </div>
                                            </div>
                                            <p>Already have an account? <a href="/login">Sign in here</a>
                                            </p>
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
