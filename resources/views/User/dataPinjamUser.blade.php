@extends('layouts.main')

@section('content')
@if (Auth::check())

@if(!empty($message))
  <div class="alert alert-success"> {{ $message }}</div>
@endif
<div id="table-merek" >
    @if (Auth::user()->role == 0)
    <a href="{{ route('sewa.index')}}" class="btn btn-primary"> Pinjam Barang </a>
    @endif
    <a class="btn btn-primary" href="{{ url('/laporan/sewa') }}">  Download Data </a>

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
            <th>Kode Pinjam</th>
            <th>Peminjam</th>
            <th>Tipe</th>
            <th>Gambar</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Harga Sewa</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pinjam as $b)
            @if (Auth::user()->role == 1 || Auth::user()->name == $b->user->name && $b->id_kamera != 0 || $b->id_kamera != NULL )
            <tr>
                <td>{{$b->kode_pinjam}}</td>
                <td>{{$b->user->name}}</td>
                <td>{{$b->kamera->tipe}}</td>
                <td><img src="{{'storage/'. $b->kamera->gambar}}" alt="" width="150px"></td>
                <td>{{$b->tanggal_pinjam}}</td>
                <td>{{$b->tanggal_kembali}}</td>
                {{-- <td>{{date_diff($b->tanggal_pinjam, $b->tanggal_kembali)}}</td> --}}
                <td>{{$b->harga_sewa}}</td>
                <td><form action="{{ route('sewa.destroy',$b->kode_pinjam) }}" method="POST">
                    {{-- <a class="btn btn-primary" href="{{ route('sewa.edit',$b->kode_pinjam) }}">Edit</a> --}}
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>

            @endif
        @endforeach
    </tbody>
    </table>
</div>

@endif
@endsection
