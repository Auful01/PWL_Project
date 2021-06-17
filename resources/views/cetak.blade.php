<head>
    <title>Data Kamera</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

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
         </div>
    <div class="col-12 text-center">
        <h5>DATA KAMERA</h5>
        <table class="table table-bordered">
            <tr><th>Kode</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>GAMBAR</th>
                {{-- <th>Jumlah</th> --}}
                {{-- <th>Harga Barang(RP)</th> --}}
                <th>Harga Sewa(RP)</th>

            </tr>
            @foreach ($kamera as $b)
            <tr>
                <td>{{$b->kode}}</td>
                <td>{{$b->merek->nama_merek}}</td>
                <td>{{$b->tipe}}</td>
                <td><img src="{{ 'storage/'. $b->gambar }}" width="100px"></td>
                {{-- <td>{{$b->jumlah}}</td>
                <td>{{$b->harga_barang}}</td> --}}
                <td>@currency($b->harga_sewa)</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

</body>
