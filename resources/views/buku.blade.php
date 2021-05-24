@extends('layouts.main')

@section('content')
@if(!empty($message))
  <div class="alert alert-success"> {{ $message }}</div>
@endif
<div id="table-buku" >
    <a href="{{ route('buku.create')}}" class="btn btn-primary"> Tambah Barang </a>
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
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>GAMBAR</th>
            <th>Jumlah</th>
            <th>Harga Barang(RP)</th>
            <th>Harga Sewa(RP)</th>
            <th> Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($buku as $b)
            <tr>
                <td>{{$b->kode}}</td>
                <td>{{$b->nama_barang}}</td>
                <td>{{$b->kategori}}</td>
                <td><img src="{{ 'storage/'. $b->gambar }}" width="150px"></td>
                <td>{{$b->jumlah}}</td>
                <td>{{$b->harga_barang}}</td>
                <td>{{$b->harga_sewa}}</td>
            </tr>
            {{-- <form action="{{ route('buku.destroy',$buku->kode) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$buku->kode) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form> --}}
        @endforeach
    </tbody>
    </table>
</div>
@endsection
