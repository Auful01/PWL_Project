<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\BukuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use PDF;

class BukuController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku =  Buku::all();
        return view('buku', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createBuku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('gambar')) {
            $img_name = $request->file('gambar')->store('gambar', 'public');
        }

        // Buku::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'gambar' => $img_name,
        // ]);

        $request->validate([
            'kode' => 'required',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required',
            'harga_barang' => 'required',
            'harga_sewa' => 'required'
        ]);

        $buku = new Buku();
        $buku->kode = $request->kode;
        $buku->nama_barang = $request->nama_barang;
        $buku->kategori = $request->kategori;
        $buku->jumlah = $request->jumlah;
        $buku->gambar = $img_name;
        $buku->harga_barang = $request->harga_barang;
        $buku->harga_sewa = $request->harga_sewa;
        $buku->save();

        return redirect('buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Menampilkan detail data dengan menemukan berdasarkan nim Mahasiswa untuk diedit
        // $buku = Buku::find($id);
        // return view('editBuku', compact('buku'));
        return view('editBuku');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        // Melakukan validasi data
        $request->validate([
            'kode' => 'required',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required',
            'harga_barang' => 'required',
            'harga_sewa' => 'required'
        ]);

        // Funsgi eloquent untuk mengupdate data inputan kita
        Buku::find($kode)->update($request->all());

        // Jika data berhasil diupdata, akan kembali ke halaman utama
        return redirect()->route('buku')
            ->with('success', 'Data Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        Buku::find($kode)->delete();
        return redirect()->route('buku')
            ->with('success', 'Data Barang Berhasil Dihapus');
    }
    public function cetak_pdf()
    {
        $buku = Buku::all();
        $pdf = PDF::loadview('cetak', ['buku' => $buku]);
        return $pdf->stream();
    }
}
