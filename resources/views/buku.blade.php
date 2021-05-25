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
        <?php $d = 1 ?>
        @foreach ($buku as $b)
            <tr>
                <td><?php echo $d ?></td>
                <td>{{$b->judul}}</td>
                <td>{{$b->penulis}}</td>
                <td>
                    @if ('storage/'. $b->gambar != NULL)
                        <img src="{{ 'storage/'. $b->gambar }}" width="150px"></td>
                    @else
                        <a href="#" class="btn btn-warn">UPLOAD</a>
                    @endif

                <td>{{$b->cetakan}}</td>
                <td>{{$b->penerbit}}</td>
                <td>{{$b->keterangan}}</td>
                <td><form action="{{ route('buku.destroy',$b->id_buku) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('buku.edit',$b->id_buku) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>

            <?php $d++?>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
