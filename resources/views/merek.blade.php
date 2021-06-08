@extends('layouts.main')

@section('content')

@if(!empty($message))
  <div class="alert alert-success"> {{ $message }}</div>
@endif
<div id="table-merek" >
    {{-- <a href="{{ route('merek.create')}}" class="btn btn-primary"> Tambah Barang </a> --}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#merekCreateModal">
        Tambah barang
      </button>

    <a class="btn btn-primary" href="{{ url('/laporan/barang') }}">  Download Data </a>

    <br>
    <br>
    <div class="col-md-6 col-sm-12 text-right">
        {{-- <a class="btn btn-primary" href="{{ url('/laporan/barang') }}">
            Download Data
        </a> --}}
    </div>
    <table id="tableku" class="table table-striped table-bordered dt-responsive nowrap">
        <thead>
        <tr>
            <th>ID Merek</th>
            <th>Merek</th>
            <th> Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($merek as $b)
            <tr>
                <td>{{$b->id_merek}}</td>
                <td>{{$b->nama_merek}}</td>


                <td><form action="{{ route('merek.destroy',$b->id_merek) }}" method="POST">
                    {{-- <a class="btn btn-primary" href="{{ route('merek.edit',$b->id_merek) }}">Edit</a> --}}
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMerekModal{{$b->id_merek}}">
                    Edit
                  </button>
                </td>
            </tr>

        @endforeach
    </tbody>
    </table>
</div>

@endsection
@section('modal')
<div class="modal fade" id="merekCreateModal" tabindex="-1" aria-labelledby="merekCreateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="merekCreateModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  {{-- EDIT MEREK MODAL --}}

  @foreach ($merek as $b)
  <div class="modal fade" id="editMerekModal{{$b->id_merek}}" tabindex="-1" aria-labelledby="editMerekModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editMerekModalLabel">Edit Merek</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('merek.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="text-label" for="id_merek" >id_merek</label>
                    <div class="input-group input-group-merge ">
                        <input id="id_merek" name="id_merek" type="text" required="" class="form-control form-control-prepended"
                            placeholder="001" value="{{$b->id_merek}}">
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
                        placeholder="Canon" value="{{$b->nama_merek}}">
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  @endsection
