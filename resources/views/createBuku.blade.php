@extends('layouts.main')

@section('content')

<div class="layout-login__overlay"></div>
<div class="layout-login__form bg-white" data-perfect-scrollbar>
    <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
        <a href="index.html" class="navbar-brand" style="min-width: 0">
            <img class="navbar-brand-icon" src="{{asset('images/stack-logo-blue.svg')}}" width="25" alt="FlowDash">
            <span>Tambah Buku</span>
        </a>
    </div>

    <h4 class="m-0">Tambah Buku</h4>
    <br>
    {{-- <p class="mb-5">Create an account with FlowDash</p> --}}

    <form action="index.html" enctype="multipart/form-data">
        <div class="form-group">
            <label class="text-label" for="name_2">ID BUKU</label>
            <div class="input-group input-group-merge">
                <input id="name_2" type="text" required="" class="form-control form-control-prepended"
                    placeholder="John Doe">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="name_2">JUDUL</label>
            <div class="input-group input-group-merge">
                <input id="name_2" type="text" required="" class="form-control form-control-prepended"
                    placeholder="John Doe">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="name_2">PENULIS</label>
            <div class="input-group input-group-merge">
                <input id="name_2" type="text" required="" class="form-control form-control-prepended"
                    placeholder="John Doe">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="name_2">GAMBAR</label>
            <div class="input-group input-group-merge">
                <input id="name_2" type="file" required="" class="form-control form-control-prepended" style="padding: 2px;">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="name_2">CETAKAN</label>
            <div class="input-group input-group-merge">
                <input id="name_2" type="text" required="" class="form-control form-control-prepended"
                    placeholder="John Doe">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="name_2">PENERBIT</label>
            <div class="input-group input-group-merge">
                <input id="name_2" type="text" required="" class="form-control form-control-prepended"
                    placeholder="John Doe">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="name_2">KETERANGAN</label>
            <div class="input-group input-group-merge">
                <textarea name="keterangan" id="keterangan" class="form-control form-control-prepended" cols="30" rows="10"></textarea>
                <div class="input-group-prepend">
                    <div class="input-group-text" style="position: fixed-top" >
                        <span class="far fa-user" ></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group text-center">
            <button class="btn btn-primary mb-2" type="submit">Tambah Buku</button><br>
            {{-- <a class="text-body text-underline" href="login.html">Have an account? Login</a> --}}
        </div>
    </form>
</div>


@endsection
