<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Models\anggotaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use PDF;

class AnggotaController extends Controller
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
        $anggota =  anggota::all();
        return view('anggota', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createAnggota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // kamera::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'gambar' => $img_name,
        // ]);

        $request->validate([
            'kode' => 'required',
            'nama_pelanggan' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required'
        ]);

        $anggota = new anggota();
        $anggota->kode = $request->get('kode');
        $anggota->nama_pelanggan = $request->get('nama_pelanggan');
        $anggota->no_telepon = $request->get('no_telepon');
        $anggota->alamat = $request->get('alamat');
        $anggota->pekerjaan= $request->get('pekerjaan');
        $anggota->save();

        return redirect('anggota');
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
    public function edit($kode)
    {
        // Menampilkan detail data dengan menemukan berdasarkan nim Mahasiswa untuk diedit
        // $kamera = kamera::find($id);
        // return view('editkamera', compact('kamera'));
        // return view('editAnggota');
        $anggota = anggota::find($kode);
        return view('editAnggota', compact('anggota'));
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
            'nama_pelanggan' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required'
        ]);

        // // Funsgi eloquent untuk mengupdate data inputan kita
        anggota::find($kode)->update($request->all());

        // // Jika data berhasil diupdata, akan kembali ke halaman utama
        return redirect()->route('anggota.index')
            ->with('success', 'Data Anggota Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        anggota::find($kode)->delete();
        return redirect()->route('anggota.index')
        ->with('success', 'Data Anggota Berhasil Dihapus');
    }
    public function cetak_pdf(){
        $anggota = anggota::all();
        $pdf = PDF::loadview('cetakAnggota',['anggota'=>$anggota]);
        return $pdf->stream();
    }
}
