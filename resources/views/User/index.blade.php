@extends('layouts.main')

@section('content')
@if(!empty($message))
  <div class="alert alert-success"> {{ $message }}</div>
@endif
<div id="table-user" >
    <a href="{{ route('user.create')}}" class="btn btn-primary"> Tambah User </a>
    <a class="btn btn-primary" href="{{ url('/laporan/user') }}">  Download Data </a>

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
            <th>Nama</th>
            <th>username</th>
            <th>E-Mail Address</th>
            <th> Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $us => $data)
        <tr>
            <td class="table-plus">{{ $us + $user->firstitem() }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email}}</td>
            <td>{{ $data->username }}</td>
                <td><form action="{{ route('user.destroy',$a->kode) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('user.edit',$a->kode) }}">Edit</a>
                         @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>

            <?php $a++?>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
