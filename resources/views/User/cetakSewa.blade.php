
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
        </tr>
    </thead>
    <tbody>
        @foreach ($pinjam as $b)
            @if (Auth::user()->role == 1 ||Auth::user()->name == $b->user->name )
            <tr>
                <td>{{$b->kode_pinjam}}</td>
                <td>{{$b->user->name}}</td>
                {{-- <td>{{$b->lensa->tipe}}</td> --}}
                <td>{{$b->kamera->tipe}}</td>
                <td><img src="{{'storage/'. $b->kamera->gambar}}" alt="" width="150px"></td>
                <td>{{$b->tanggal_pinjam}}</td>
                <td>{{$b->tanggal_kembali}}</td>
                {{-- <td>{{date_diff($b->tanggal_pinjam, $b->tanggal_kembali)}}</td> --}}
                <td>{{$b->harga_sewa}}</td>
            </tr>

            @endif
        @endforeach
    </tbody>
    </table>
</div>
@endif

