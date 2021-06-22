<?php

namespace App\Http\Controllers;

use App\Models\Kamera;
use App\Models\Lensa;
use App\Models\Peminjaman;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use PhpParser\Node\Scalar\LNumber;

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

    public function indexLensa()
    {
        $lensa = Lensa::with('merek')->get();
        return view('User.sewaLensa', ['lensa' => $lensa]);
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

        Peminjaman::create($request->all());

        return redirect('sewa');
    }

    public function storeLensa(Request $request)
    {
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
        $pinjam = Peminjaman::with('kamera')->with('user')->get();
        $pdf = PDF::loadview('user.cetakSewa', ['pinjam' => $pinjam]);
        return $pdf->stream();
    }

    public function cetak_pdfLensa()
    {
        $pinjam = Peminjaman::with('lensa')->with('user')->get();
        $pdf = PDF::loadview('User.cetakLensa', ['pinjam' => $pinjam]);
        return $pdf->stream();
    }

    public function cetak_pdfSewaKamera()
    {
        $pinjam = Peminjaman::with('kamera')->with('user')->whereNotNull('id_kamera')->get();
        $pdf = PDF::loadview('cetakSewaKamera', ['pinjam' => $pinjam]);
        return $pdf->stream();
    }

    public function cetak_pdfSewaLensa()
    {
        $pinjam = Peminjaman::with('lensa')->with('user')->where('id_lensa', '!=', 0)->whereNotNull('id_lensa')->get();
        $pdf = PDF::loadview('cetakSewaLensa', ['pinjam' => $pinjam]);
        return $pdf->stream();
    }
}
