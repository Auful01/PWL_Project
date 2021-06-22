

@if (Auth::check())

<style>
    table {
border: 1px solid rgb(0, 0, 0);
border-collapse: collapse;
margin: 0;
padding: 0;
width: 100%;
table-layout: fixed;
}
table caption {
font-size: 1.5em;
margin: .5em 0 .75em;
}
table tr {
background-color: #fdfdfd;
border: 3px solid rgb(0, 0, 0);
padding: .35em;
}
table th,
table td {
padding: .625em;
text-align: center;
}
table th {
font-size: .85em;
letter-spacing: .1em;
text-transform: uppercase;
}
</style>
<div class="row">
    {{-- <div class="col-12 text-center">
        <center><h3><strong>Kwitansi Pemesanan</strong></h3><br />
         </div>
    <div class="col-12">
        <table class="table table-bordered">
            <tr><th>Nama Kamera</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Harga</th>

            @foreach ($pinjam as $p)
                @if (Auth::user()->name == $pinjam->user->id)

                <tr>
                    <td>{{$p->merek->nama_merek}} {{$p->tipe}}</td>
                    <td><img src="{{ 'storage/'. $p->gambar }}" width="100px"></td>
                    <td>{{$p->deskripsi}}</td>
                    <td>{{date('d/m/y', strtotime($p->tanggal_pinjam))}}</td>
                    <td>{{date('d/m/y', strtotime($p->tanggal_kembali))}}</td>
                    <td>{{$p->harga_akhir}}</td>
                    </tr>

                @endif
            @endforeach
        </table>
    </div> --}}
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
            @if (Auth::user()->role == 1 ||Auth::user()->name == $b->user->name && $b->id_lensa != 0 )
            <tr>
                <td>{{$b->kode_pinjam}}</td>
                <td>{{$b->user->name}}</td>
                {{-- <td>{{$b->lensa->tipe}}</td> --}}
                <td>{{$b->lensa->tipe}}</td>
                <td><img src="{{'storage/'. $b->lensa->gambar}}" alt="" width="150px"></td>
                <td>{{$b->tanggal_pinjam}}</td>
                <td>{{$b->tanggal_kembali}}</td>
                {{-- <td>{{date_diff($b->tanggal_pinjam, $b->tanggal_kembali)}}</td> --}}
                <td>{{$b->harga_sewa}}</td>
                <td><form action="{{ route('sewa.destroy',$b->kode_pinjam) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('sewa.edit',$b->kode_pinjam) }}">Edit</a>
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

