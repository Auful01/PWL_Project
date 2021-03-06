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
            <th>#</th>
            <th>Nama</th>
            <th>username</th>
            <th>E-Mail Address</th>
            <th>Level</th>
            <th> Action</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $us => $data)
        <tr>
            <td class="table-plus">{{ $data->id }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->email}} {{$data->status}}</td>
            <td>@if ($data->role == 0)
                <?php echo 'User'; ?>
            @else
                <?php echo 'Admin'; ?>
                @endif
        </td>
                <td>
                    <form action="{{ route('user.destroy',$data->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('user.edit',$data->id) }}">Edit</a>
                         @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
                <td>
                    <input data-id="{{$data->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $data->status ? 'checked' : '' }}>
                 </td>
            </tr>

        @endforeach
    </tbody>
    </table>
</div>
@endsection

@section('modal')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
