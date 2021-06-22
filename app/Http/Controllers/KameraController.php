<?php

namespace App\Http\Controllers;

use App\Models\Kamera;
use App\Models\kameraModel;
use App\Models\Lensa;
use App\Models\Merek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class KameraController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamera =  Kamera::with('merek')->get();
        $merek = Merek::all();
        return view('kamera', ['kamera' => $kamera, 'merek' => $merek]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merek = Merek::all();
        return view('kamera', compact('merek'));
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
            'deskripsi' => 'required',
            'id_merek' => 'required',
            'harga_sewa' => 'required'
        ]);

        $kamera = new Kamera;
        $kamera->kode = $request->get('kode');
        $kamera->tipe = $request->get('tipe');
        $kamera->id_merek = $request->get('id_merek');
        $kamera->deskripsi = $request->get('deskripsi');
        $kamera->gambar = $img_name;
        $kamera->harga_sewa = $request->get('harga_sewa');
        $kamera->save();

        $msg = Alert::success('Sukses', 'Data Berhasil ditambah');
        // return var_dump($kamera);
        return redirect('kamera')->with('', $msg);
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
        // $kamera = kamera::with('merek')->where('kode', $id);
        // return view('editkamera', compact('kamera'));
        return view('editKamera');
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
        // if ($request->file('gambar')) {
        //     $img_name = $request->file('gambar')->store('gambar', 'public');
        // }
        // Melakukan validasi data
        $request->validate([
            'kode' => 'required',
            'tipe' => 'required',
            'id_merek' => 'required',
            'deskripsi' => 'required',
            'harga_sewa' => 'required'
        ]);

        // Funsgi eloquent untuk mengupdate data inputan kita
        // kamera::find($kode)->update($request->all());
        $kamera = Kamera::with('merek')->where('kode', $kode)->first();
        $kamera->kode = $request->get('kode');
        $kamera->tipe = $request->get('tipe');
        $kamera->id_merek = $request->get('id_merek');
        $kamera->deskripsi = $request->get('deskripsi');
        if ($kamera->gambar && file_exists(storage_path('app/public/gambar' . $kamera->gambar))) {
            Storage::delete('public/gambar' . $kamera->foto);
        }
        $img_name = $request->file('gambar')->store('gambar', 'public');
        $kamera->gambar = $img_name;
        $kamera->harga_sewa = $request->get('harga_sewa');
        $kamera->save();

        // Jika data berhasil diupdata, akan kembali ke halaman utama
        return redirect()->route('kamera.index')
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
        $kamera = kamera::with('merek')->get();
        $pdf = PDF::loadview('cetak', ['kamera' => $kamera]);
        return $pdf->stream();
    }

    public function cetak_pdfLensa()
    {
        $lensa = Lensa::with('merek')->get();
        $pdf = PDF::loadview('cetakLensa', ['lensa' => $lensa]);
        return $pdf->stream();
    }

    public function merek_kamera()
    {
        $merek = Merek::all();
        return $merek;
    }
}
