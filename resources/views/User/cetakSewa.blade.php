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
    <div class="col-12 text-center">
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

            @foreach ($kamera as $k)
            <tr>
                <td>{{$k->merek->nama_merek}} {{$k->tipe}}</td>
                <td><img src="{{ 'storage/'. $k->gambar }}" width="100px"></td>
                <td>{{$k->deskripsi}}</td>
                <td>{{$k->tanggal_pinjam}}</td>
                <td>{{$k->tanggal_kembali}}</td>
                <td>{{$k->harga_akhir}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
