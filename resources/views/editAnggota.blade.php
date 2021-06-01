    @extends('layouts.main')

    @section('content')

    <div class="layout-login__overlay"></div>
    <div class="layout-login__form bg-white" data-perfect-scrollbar>
        <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
            <a href="index.html" class="navbar-brand" style="min-width: 0">
                <img class="navbar-brand-icon" src="{{asset('images/stack-logo-blue.svg')}}" width="25" alt="FlowDash">
                <span>Edit Anggota</span>
            </a>
        </div>

        {{-- <p class="mb-5">Create an account with FlowDash</p> --}}
        <div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="title">
                                    <h4>Edit Data Anggota</h4>
                                </div>
                                <nav aria-label="breadcrumb" role="navigation">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('anggota')}}">Data Master</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('anggota.index')}}">Anggota</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-md-6 col-sm-12 text-right">
                                <a href="{{route('anggota.index')}}" type="button" class="btn" data-bgcolor="#3b5998" data-color="#ffffff">
                                    <i class="icon-copy fa fa-arrow-left" aria-hidden="true"></i>
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </div>

        <form method="post" action="{{ route('anggota.update', $anggota->kode) }}" id="myForm"> @csrf @method('PUT')
            @csrf
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode">kode</label>
                <input type="text" name="kode" class="form-control" id="kode" value="{{ $anggota->kode }}" aria-describedby="kode" >
            </div>
            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan </label>
                <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan" value="{{ $anggota->nama_pelanggan }}" aria-describedby="nama_pelanggan" >
            </div>
            <div class="form-group">
                <label for="no_telepon">No Telepon</label>
                <input type="text" name="no_telepon" class="form-control" id="no_telepon" value="{{ $anggota->no_telepon }}" aria-describedby="no_telepon" >
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="alamat" name="alamat" class="form-control" id="alamat" value="{{ $anggota->alamat }}" aria-describedby="alamat" >
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="pekerjaan" name="pekerjaan" class="form-control" id="pekerjaan" value="{{ $anggota->pekerjaan }}" aria-describedby="pekerjaan" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
