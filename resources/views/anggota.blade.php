@extends('layouts.main')

@section('content')
@if(!empty($message))
  <div class="alert alert-success"> {{ $message }}</div>
@endif
<div id="table-anggota" >
    <a href="{{ route('anggota.create')}}" class="btn btn-primary"> Tambah Anggota </a>
    <a class="btn btn-primary" href="{{ url('/laporan/anggota') }}">  Download Data </a>

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
            <th>Kode</th>
            <th>Nama Pelanggan</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th> Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($anggota as $a)
            <tr>
                <td>{{$a->kode}}</td>
                <td>{{$a->nama_pelanggan}}</td>
                <td>{{$a->no_telepon}}</td>
                <td>{{$a->alamat}}</td>
                <td>{{$a->pekerjaan}}</td>
                {{-- <td><form action="{{ route('anggota.destroy',$a->id_anggota) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('anggota.edit',$a->id_anggota) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></td> --}}
            </tr>

            <?php $a++?>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
