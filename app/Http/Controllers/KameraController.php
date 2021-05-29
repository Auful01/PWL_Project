<?php

namespace App\Http\Controllers;

use App\Models\kamera;
use App\Models\kameraModel;
use App\Models\Merek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use PDF;

class KameraController extends Controller
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
        $kamera =  kamera::with('merek')->get();
        return view('kamera', ['kamera' => $kamera]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merek = Merek::all();
        return view('createkamera', compact('merek'));
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

        // kamera::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'gambar' => $img_name,
        // ]);

        $request->validate([
            'kode' => 'required',
            'tipe' => 'required',
            'merek' => 'required',
            'harga_sewa' => 'required'
        ]);

        $kamera = new kamera();
        $kamera->kode = $request->get('kode');
        $kamera->tipe = $request->get('tipe');
        $kamera->gambar = $img_name;
        $kamera->harga_sewa = $request->get('harga_sewa');

        $merek = new Merek();
        $merek->id_merek = $request->get('merek');
        $kamera->merek()->associate($merek);
        $kamera->save();

        return redirect('kamera');
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
        // $kamera = kamera::find($id);
        // return view('editkamera', compact('kamera'));
        return view('editkamera');
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
            'tipe' => 'required',
            'merek' => 'required',
            'harga_sewa' => 'required'
        ]);

        // Funsgi eloquent untuk mengupdate data inputan kita
        kamera::find($kode)->update($request->all());

        // Jika data berhasil diupdata, akan kembali ke halaman utama
        return redirect()->route('kamera')
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
        kamera::find($kode)->delete();
        return redirect()->route('kamera')
            ->with('success', 'Data Barang Berhasil Dihapus');
    }
    public function cetak_pdf()
    {
        $kamera = kamera::all();
        $pdf = PDF::loadview('cetak', ['kamera' => $kamera]);
        return $pdf->stream();
    }
}
