@extends('layouts.main')

@section('content')
@if(!empty($message))
  <div class="alert alert-success"> {{ $message }}</div>
@endif
<div id="table-merek" >
    <a href="{{ route('merek.create')}}" class="btn btn-primary"> Tambah Barang </a>
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
                <td>{{$b->merek}}</td>

                <td><form action="{{ route('merek.destroy',$b->id_merek) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('merek.edit',$b->id_merek) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>

        @endforeach
    </tbody>
    </table>
</div>
@endsection
