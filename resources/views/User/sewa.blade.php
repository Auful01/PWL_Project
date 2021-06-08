@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-body row">
        @foreach ($kamera as $k)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="{{'storage/'. $k->gambar }}" class="card-img-top" alt="..." width="150px">
                <div class="card-body">
                <h5 class="card-title">{{$k->merek->nama_merek}} {{$k->tipe}}</h5>
                <p class="card-text"><b>Deskripsi</b> <br>{{$k->deskripsi}} <br> <b>@currency($k->harga_sewa)</b>/Hari</p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sewaModal{{$k->kode}}">
                    Sewa Sekarang
                  </button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cobaModal">
                    jajal
                  </button>
                </div>
            </div>
        </div>
        @endforeach

    </div>
  </div>
@endsection
{{-- Modal Sewa --}}
@section('modal')
@foreach ($kamera as $k)
<div class="modal fade" id="sewaModal{{$k->kode}}" tabindex="-1" role="dialog" aria-labelledby="sewaModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                            <img width="200px" src="{{'storage/'. $k->gambar }}" class="card-img-top" alt="..." >
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div class="card card-body">
                            <h5 class="card-title">{{$k->merek->nama_merek}} {{$k->tipe}}</h5>
                            <p class="card-text"><b>Deskripsi</b> <br>{{$k->deskripsi}} <br> <b>@currency($k->harga_sewa)</b>/Hari</p>
                                <input type="hidden" id="harga_sewa" value="{{ $k->harga_sewa }}">
                                <label for="tanggal_pinjam">Tanggal Pinjam</label>
                                <input type="date" name="tanggal_pinjam" id="tanggal_pinjam">
                                {{-- <input id="datepicker" type="datepicker" name="date" placeholder="Date" /> --}}
                                <label for="tanggal_kembali">Tanggal Kembali</label>
                                <input type="date" name="tanggal_kembali" id="tanggal_kembali">
                                {{-- <input type="text" name="tanggal" id="harga_akhir"> --}}
                                <br>
                                <label for="harga_akhir">Harga : </label>
                                <input type="text" name="tanggal" id="harga_akhir" style="border: none">
                                {{-- <div class="total-bayar">
                                    <span id="tanggal_coba"></span>
                                </div> --}}
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sewaModal{{$k->kode}}">
                                Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endforeach

@endsection

