@extends('layouts.main')

@section('content')

<div class="layout-login__overlay"></div>
<div class="layout-login__form bg-white" data-perfect-scrollbar>
    <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
        <a href="index.html" class="navbar-brand" style="min-width: 0">
            <img class="navbar-brand-icon" src="{{asset('images/stack-logo-blue.svg')}}" width="25" alt="FlowDash">
            <span>Tambah User</span>
        </a>
    </div>

    <h4 class="m-0">Tambah User</h4>
    <br>
    {{-- <p class="mb-5">Create an account with FlowDash</p> --}}

    <form action="{{ route('user.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="text-label" for="nama">Nama</label>
            <div class="input-group input-group-merge">
                <input id="nama" name="nama" type="text" required="" class="form-control form-control-prepended">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="username">Username</label>
            <div class="input-group input-group-merge">
                <input id="username" name="username" type="text" required="" class="form-control form-control-prepended">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="email">E-Mail Address</label>
            <div class="input-group input-group-merge">
                <input id="email" name="email" type="text" required="" class="form-control form-control-prepended">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="username">Password</label>
            <div class="input-group input-group-merge">
                <input id="username" name="username" type="text" required="" class="form-control form-control-prepended">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="password-confirm">Confirm Password</label>
            <div class="input-group input-group-merge">
                <input id="confirm_password" name="password_confirmation" type="password" required="" class="form-control form-control-prepended"
                    placeholder="">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
           <div class="form-group text-center">
            <button class="btn btn-primary mb-2" type="submit">Tambah User</button><br>
            {{-- <a class="text-body text-underline" href="login.html">Have an account? Login</a> --}}
        </div>
    </form>
</div>
@endsection
