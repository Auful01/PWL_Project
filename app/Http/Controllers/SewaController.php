<?php

namespace App\Http\Controllers;

use App\Models\Kamera;
use App\Models\Peminjaman;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use PDF;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamera =  Kamera::with('merek')->get();
        return view('User.sewa', ['kamera' => $kamera]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'kode_pinjam' => 'required',
        //     'id_kamera' => 'required',
        //     'id_user' => 'required',
        //     'tanggal_pinjam' => 'required',
        //     'tanggal_kembali' => 'required',
        // ]);

        // $kode = IdGenerator::generate(['table' => 'peminjaman', 'length' => 8, 'prefix' => 'Pjm-']);
        $peminjaman = Peminjaman::create($request->all());

        return $peminjaman;
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
        $kamera = anggota::find($kode);
        return view('editPinjam', compact('pinjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {

    }
    public function cetak_pdf()
    {
        $kamera = kamera::all();
        $pdf = PDF::loadview('user.cetakSewa', ['kamera' => $kamera]);
        return $pdf->stream();
    }
}
