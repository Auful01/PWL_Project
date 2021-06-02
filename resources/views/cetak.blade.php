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
        <center><h3><strong>Data Barang</strong></h3><br />
         </div>
    <div class="col-12">
        <table class="table table-bordered">
            <tr><th>Kode</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>GAMBAR</th>
                <th>Jumlah</th>
                <th>Harga Barang(RP)</th>
                <th>Harga Sewa(RP)</th>

            </tr>
            @foreach ($kamera as $b)
            <tr>
                <td>{{$b->id}}</td>
                <td>{{$b->merek}}</td>
                <td>{{$b->tipe}}</td>
                <td><img src="{{ 'storage/'. $b->gambar }}" width="100px"></td>
                {{-- <td>{{$b->jumlah}}</td>
                <td>{{$b->harga_barang}}</td> --}}
                <td>{{$b->harga_sewa}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
