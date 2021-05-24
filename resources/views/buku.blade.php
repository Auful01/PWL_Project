@extends('layouts.main')

@section('content')
<div id="table-buku" >
    <a href="{{ route('buku.create')}}" class="btn btn-primary"> Tambah Buku </a>
    <br>
    <br>
    <table id="tableku" class="table table-striped table-bordered dt-responsive nowrap">
        <thead>
        <tr>
            <th>ID BUKU</th>
            <th>JUDUL</th>
            <th>PENULIS</th>
            <th>PENERBIT</th>
            <th>CETAKAN</th>
            <th>KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($buku as $b)
            <tr>
                <td>{{$b->id_buku}}</td>
                <td>{{$b->judul}}</td>
                <td>{{$b->penulis}}</td>
                <td>{{$b->penerbit}}</td>
                <td>{{$b->cetakan}}</td>
                <td>{{$b->keterangan}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
