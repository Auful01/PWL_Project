@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-body row">
        @foreach ($kamera as $k)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="{{'storage/'. $k->gambar }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$k->merek->nama_merek}} {{$k->tipe}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
  </div>
@endsection