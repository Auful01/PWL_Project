<?php

namespace App\Http\Controllers;

use App\Models\Lensa;
use App\Models\lensaModel;
use App\Models\Merek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class LensaController extends Controller
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
        $lensa =  Lensa::with('merek')->get();
        $merek = Merek::all();
        return view('lensa', ['lensa' => $lensa, 'merek' => $merek]);
        // return var_dump($lensa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merek = Merek::all();
        return view('lensa', compact('merek'));
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

        // lensa::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'gambar' => $img_name,
        // ]);

        $request->validate([
            'kode' => 'required',
            'tipe' => 'required',
            'deskripsi' => 'required',
            // 'merek' => 'required',
            'harga_sewa' => 'required'
        ]);

        $lensa = new Lensa;
        $lensa->kode = $request->get('kode');
        $lensa->tipe = $request->get('tipe');
        $lensa->merek = $request->get('id_merek');
        $lensa->deskripsi = $request->get('deskripsi');
        $lensa->gambar = $img_name;
        $lensa->harga_sewa = $request->get('harga_sewa');
        $lensa->save();

        $msg = Alert::success('Sukses', 'Data Berhasil ditambah');
        return var_dump($lensa);
        // return redirect('lensa')->with('', $msg);

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
        // $lensa = lensa::with('merek')->where('kode', $id);
        // return view('editlensa', compact('lensa'));
        return view('editLensa');
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
            'merek' => 'required',
            'deskripsi' => 'required',
            'harga_sewa' => 'required'
        ]);

        // Funsgi eloquent untuk mengupdate data inputan kita
        // lensa::find($kode)->update($request->all());
        $lensa = Lensa::with('merek')->where('kode', $kode)->first();
        $lensa->kode = $request->get('kode');
        $lensa->tipe = $request->get('tipe');
        $lensa->merek = $request->get('id_merek');
        $lensa->deskripsi = $request->get('deskripsi');
        if ($lensa->gambar && file_exists(storage_path('app/public/gambar' . $lensa->gambar))) {
            Storage::delete('public/gambar' . $lensa->foto);
        }
        $img_name = $request->file('gambar')->store('gambar', 'public');
        $lensa->gambar = $img_name;
        $lensa->harga_sewa = $request->get('harga_sewa');
        $lensa->save();

        // Jika data berhasil diupdata, akan kembali ke halaman utama
        return redirect()->route('lensa.index')
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
        Lensa::find($kode)->delete();
        return redirect()->route('lensa')
            ->with('success', 'Data Barang Berhasil Dihapus');
    }
    public function cetak_pdf()
    {
        $lensa = lensa::all();
        $pdf = PDF::loadview('cetak', ['lensa' => $lensa]);
        return $pdf->stream();
    }

    public function merek_lensa()
    {
        $merek = Merek::all();
        return $merek;
    }
}
