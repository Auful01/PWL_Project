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
        <center><h3><strong>Data Merek</strong></h3><br />
         </div>
    <div class="col-12">
        <table class="table table-bordered">
            <tr> <th>ID Merek</th>
                <th>Merek</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($merek as $b)
                <tr>
                    <td>{{$b->id_merek}}</td>
                    <td>{{$b->nama_merek}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
