@extends('layouts.main')

@section('content')
@if(!empty($message))
  <div class="alert alert-success"> {{ $message }}</div>
@endif
<div id="table-kamera" >
    <a href="{{ route('kamera.create')}}" class="btn btn-primary"> Tambah Barang </a>
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
            <th>Tipe</th>
            <th>Merek</th>
            <th>GAMBAR</th>
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

                <td>{{$b->harga_sewa}}</td>
                <td><form action="{{ route('kamera.destroy',$b->kode) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('kamera.edit',$b->kode) }}">Edit</a>
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
