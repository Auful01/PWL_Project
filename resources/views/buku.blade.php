@extends('layouts.main')

@section('content')
@if(!empty($message))
  <div class="alert alert-success"> {{ $message }}</div>
@endif
<div id="table-buku" >
    <a href="{{ route('buku.create')}}" class="btn btn-primary"> Tambah Barang </a>
    <br>
    <br>
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
        @endforeach
    </tbody>
    </table>
</div>
@endsection
