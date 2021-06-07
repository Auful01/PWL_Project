@extends('layouts.main')

@section('content')

<div class="layout-login__overlay"></div>
<div class="layout-login__form bg-white" data-perfect-scrollbar>
    <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
        <a href="index.html" class="navbar-brand" style="min-width: 0">
            <img class="navbar-brand-icon" src="{{asset('images/stack-logo-blue.svg')}}" width="25" alt="FlowDash">
            <span>Tambah Barang</span>
        </a>
    </div>

    <h4 class="m-0">Tambah Barang</h4>
    <br>
    {{-- <p class="mb-5">Create an account with FlowDash</p> --}}

    <form action="{{ route('merek.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="text-label" for="id_merek">id_merek</label>
            <div class="input-group input-group-merge ">
                <input id="id_merek" name="id_merek" type="text" required="" class="form-control form-control-prepended"
                    placeholder="001">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="merek">Merek</label>
            <div class="input-group input-group-merge">
                <input id="merek"  name="merek"type="text" required="" class="form-control form-control-prepended"
                placeholder="Canon">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group text-center">
            <button class="btn btn-primary mb-2" type="submit">Tambah Barang</button><br>
            {{-- <a class="text-body text-underline" href="login.html">Have an account? Login</a> --}}
        </div>
    </form>


</div>
@endsection
