@extends('layouts.main')

@section('modal')
<div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
    {{-- @foreach ($kamera->kode as $k) --}}
<div class="modal fade" id="editKameraModal{{$b->kode}}" tabindex="-1" aria-labelledby="editKameraModal" aria-hidden="true">

    {{-- @endforeach --}}
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <img class="navbar-brand-icon" src="{{asset('images/stack-logo-blue.svg')}}" width="25" alt="FlowDash">
          <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        {{-- <p class="mb-5">Create an account with FlowDash</p> --}}

        <form action="{{ route('kamera.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="text-label" for="kode">Kode</label>
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
                    <select name="id_merek" id="id_merek" class="form-control form-control-prepended">
                        @foreach ($merek as $m)
                            <option value="{{$m->id_merek}}">{{$m->nama_merek}}</option>
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
                <label class="text-label" for="tipe">Tipe</label>
                <div class="input-group input-group-merge">
                    <input id="tipe" name="tipe" type="text" required="" class="form-control form-control-prepended"
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

        </div>
        <div class="modal-footer form-group text-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
          <button class="btn btn-primary mb-2" type="submit">Tambah Barang</button><br>
        </div>
    </form>
      </div>
    </div>
  </div>
  </div>
  @endsection
