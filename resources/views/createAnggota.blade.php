@extends('layouts.main')

@section('content')

<div class="layout-login__overlay"></div>
<div class="layout-login__form bg-white" data-perfect-scrollbar>
    <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
        <a href="index.html" class="navbar-brand" style="min-width: 0">
            <img class="navbar-brand-icon" src="{{asset('images/stack-logo-blue.svg')}}" width="25" alt="FlowDash">
            <span>Tambah Anggota</span>
        </a>
    </div>

    <h4 class="m-0">Tambah Anggota</h4>
    <br>
    {{-- <p class="mb-5">Create an account with FlowDash</p> --}}

    <form action="{{ route('anggota.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="text-label" for="id_kamera">Kode</label>
            <div class="input-group input-group-merge ">
                <input id="kode" name="kode" type="text" required="" class="form-control form-control-prepended"
                    placeholder="001">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="nama_pelanggan">Nama Pelanggan</label>
            <div class="input-group input-group-merge">
                <input id="nama_pelanggan" name="nama_pelanggan" type="text" required="" class="form-control form-control-prepended"
                placeholder="Nama">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="no_telepon">No telepon</label>
            <div class="input-group input-group-merge">
                <input id="no_telepon" name="no_telepon" type="text" required="" class="form-control form-control-prepended"
                    placeholder="087xxxxxxxxx">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="alamat">Alamat</label>
            <div class="input-group input-group-merge">
                <input id="alamat" name="alamat" type="text" required="" class="form-control form-control-prepended"
                    placeholder="jl raya waru">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="pekerjaan">Pekerjaan</label>
            <div class="input-group input-group-merge">
                <input id="pekerjaan" name="pekerjaan" type="text" required="" class="form-control form-control-prepended"
                    placeholder="Wiraswasta">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
           <div class="form-group text-center">
            <button class="btn btn-primary mb-2" type="submit">Tambah Anggota</button><br>
            {{-- <a class="text-body text-underline" href="login.html">Have an account? Login</a> --}}
        </div>
    </form>
</div>
@endsection
