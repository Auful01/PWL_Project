<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class UserPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjam = Peminjaman::with('kamera')->with('user')->whereNotNull('id_kamera')->get();
        return view('User.dataPinjamUser', ['pinjam' => $pinjam]);
    }

    public function indexLensa()
    {
        $pinjam = Peminjaman::with('lensa')->with('user')->where('id_lensa', '!=', 0)->whereNotNull('id_lensa')->get();
        return view('User.dataPinjamUserLensa', ['pinjam' => $pinjam]);
    }

    public function indexAdmin()
    {
        $pinjam = Peminjaman::with('kamera')->with('user')->whereNotNull('id_kamera')->get();
        // return $pinjam;
        return view('peminjaman', ['pinjam' => $pinjam]);
    }

    public function indexLensaAdmin()
    {
        $pinjam = Peminjaman::with('lensa')->with('user')->where('id_lensa', '!=', 0)->whereNotNull('id_lensa')->get();
        // return $pinjam;
        return view('peminjamanLensa', ['pinjam' => $pinjam]);
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
        //
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
