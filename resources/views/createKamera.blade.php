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

    <form action="{{ route('kamera.store')}}" method="POST" enctype="multipart/form-data">
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
            <label class="text-label" for="judul">Merek</label>
            <div class="input-group input-group-merge">
                {{-- <input id="merek"  name="merek"type="text" required="" class="form-control form-control-prepended"
                placeholder="Canon"> --}}
                <select name="merek" id="merek" class="form-control form-control-prepended">
                    @foreach ($merek as $m)
                        <option value="{{$m->id_merek}}">{{$k->merek}}</option>
                    @endforeach
                    {{-- <a href="{{route('merek.create')}}">Tambah merek</a> --}}

                </select>
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="penulis">Tipe</label>
            <div class="input-group input-group-merge">
                <input id="kategori" name="kategori" type="text" required="" class="form-control form-control-prepended"
                placeholder="kamera">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="gambar">GAMBAR</label>
            <div class="input-group input-group-merge">
                <input id="gambar" name="gambar" type="file" required="" class="form-control form-control-prepended" style="padding: 2px;">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="penerbit">Harga Sewa(RP)</label>
            <div class="input-group input-group-merge">
                <input id="harga_sewa" name="harga_sewa" type="text" required="" class="form-control form-control-prepended"
                    placeholder="Rp.">
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
