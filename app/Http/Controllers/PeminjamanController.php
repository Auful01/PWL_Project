<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjam = Peminjaman::with('kamera')->with('lensa')->with('user')->get();
        return view('User.dataPinjamUser', ['pinjam' => $pinjam]);
    }

    public function index_riwayat()
    {
        $pinjam = Peminjaman::with('kamera')->with('user')->get();
        return view('User.dataPinjamUser', ['pinjam' => $pinjam]);
    }

    public function indexPinjamLensa()
    {
        $pinjam = Peminjaman::with('lensa')->with('user')->where('id_lensa', '!=', 0)->get();
        return view('User.dataPinjamUserLensa', ['pinjam' => $pinjam]);
    }

    public function indexAdminLensa()
    {
        $pinjam = Peminjaman::with('lensa')->with('user')->where('id_kamera', 'IS NOT NULL')->get();
        return view('peminjamanLensa', ['pinjam' => $pinjam]);
    }
    public function indexAdminKamera()
    {
        $pinjam = Peminjaman::with('kamera')->with('user')->where('id_lensa', 'IS NOT NULL')->get();
        return view('peminjaman', ['pinjam' => $pinjam]);
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
        // $id =;

        // $request->validate([
        //     // 'kode_pinjam' => 'required',
        //     'id_kamera' => 'required',
        //     'tanggal_pinjam' => 'required',
        //     'tanggal_kembali' => 'required',
        // ]);

        // $pinjam = new Peminjaman;
        // // $pinjam->kode_pinjam =  IdGenerator::generate(['table' => 'peminjaman', 'length' => 8, 'prefix' => 'Pjm-']);
        // $pinjam->id_kamera = $request->get('kode');
        // $pinjam->tanggal_pinjam = $request->get('tanggal_pinjam');
        // $pinjam->kode_pinjam = $request->get('kode_pinjam');
        // $pinjam->save();

        // return var_dump($pinjam);
        // return redirect()->view('User.sewa')
        //     ->with('success', 'Data Barang Berhasil Diupdate');
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
        //
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
    public function destroy($id)
    {
        //
    }
}
