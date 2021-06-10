@extends('layouts.main')

@section('content')
@if(!empty($message))
  <div class="alert alert-success"> {{ $message }}</div>
@endif
<div id="table-kamera" >
    {{-- <a href="{{ route('kamera.create')}}" class="btn btn-primary"> Tambah Barang </a> --}}
    <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#createKameraModal">Tambah Barang</button>
    {{-- <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#editKameraModal" >Edit</button> --}}
    <a class="btn btn-primary" href="{{ url('/laporan/barang') }}">  Download Data </a>

    <br>
    <br>
    <div class="col-md-6 col-sm-12 text-right">
        {{-- <a class="btn btn-primary" href="{{ url('/laporan/barang') }}">
            Download Data
        </a> --}}
    </div>
    <table id="tableku" class="table table-striped table-bordered dt-responsive nowrap data-row">
        <thead>
        <tr>
            <th>Kode</th>
            <th>Tipe</th>
            <th>Merek</th>
            <th>GAMBAR</th>
            <th>Deskripsi</th>
            <th>Harga Sewa</th>
            <th> Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $d = 1 ?>
        @foreach ($kamera as $b)
            <tr>
                <td><?php echo $d ?></td>
                <td>{{$b->tipe}}</td>
                <td>{{$b->merek->nama_merek }}</td>
                <td>
                    @if ('storage/'. $b->gambar != NULL)
                        <img src="{{ ' storage/'. $b->gambar }}" width="150px"></td>
                    @else
                        <a href="#" class="btn btn-warn">UPLOAD</a>
                    @endif
                <td>{{$b->deskripsi}}</td>
                <td>@currency($b->harga_sewa)</td>
                <td>
                    <button class="btn btn-primary btn-modal-editKamera"  data-bs-toggle="modal" data-bs-target="#editKameraModal" data-kode="{{ $b->kode }} " data-tipe="{{ $b->tipe }}" data-merek="{{$b->merek->id_merek}}" data-gambar="{{' storage/'. $b->gambar}}" data-deskripsi="{{$b->deskripsi}}" data-harga="@currency($b->harga_sewa)" data-url="{{route('kamera.update', $b->kode)}}">Edit</button>
                    <form action="{{ route('kamera.destroy',$b->kode) }}" method="POST">
                    {{-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editKameraModal" href="{{route('kamera.index',$b->kode)}}">Edit</a> --}}
                    {{-- <button type="button" class="btn btn-success" id="editKameraModal" data-item-id="{{$b->kode}}">edit</button> --}}
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>


            </td>
            </tr>

            <?php $d++?>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
{{-- MODAL CREATE --}}

@section('modal')
<div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
<div class="modal fade" id="createKameraModal" tabindex="-1" aria-labelledby="createKameraModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <img class="navbar-brand-icon" src="{{asset('images/stack-logo-blue.svg')}}" width="25" alt="FlowDash">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
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
                <label class="text-label" for="deskripsi">Deskripsi</label>
                <div class="input-group input-group-merge">
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control form-control-prepended"></textarea>
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
                    <input id="harga_sewa" name="harga_sewa" type="text" required="" class="form-control form-control-prepended harga_sewa"
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


  {{-- MODAL EDIT --}}
  <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
    <div class="modal fade" id="editKameraModal" tabindex="-1" aria-labelledby="createKameraModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <img class="navbar-brand-icon" src="{{asset('images/stack-logo-blue.svg')}}" width="25" alt="FlowDash">
              <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            {{-- <p class="mb-5">Create an account with FlowDash</p> --}}

            <form action="" method="POST" class="url" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="text-label" for="kode">Kode</label>
                    <div class="input-group input-group-merge ">
                        <input id="kode" name="kode" type="text" required="" class="form-control form-control-prepended kode"
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
                        <select name="id_merek" id="id_merek" class="form-control form-control-prepended kntl">

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
                        <input id="tipe" name="tipe" type="text" required="" class="form-control form-control-prepended tipe"
                        placeholder="kamera" >
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
                        <input id="gambar" name="gambar" type="file" required="" class="form-control form-control-prepended " style="padding: 2px;" >
                        <img width="150px" class="gambar" src="">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="far fa-user"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label" for="deskripsi">Deskripsi</label>
                    <div class="input-group input-group-merge">
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control form-control-prepended deskripsi" ></textarea>
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
                        <input id="harga_sewa" name="harga_sewa" type="text" required="" class="form-control form-control-prepended harga_sewa"
                            placeholder="Rp." >
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

