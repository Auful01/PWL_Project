<?php

namespace App\Http\Controllers;

use App\Models\Kamera;
use App\Models\Lensa;
use App\Models\Peminjaman;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
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
    public function cetak_pdf()
    {
        $kamera = kamera::all();
        $pdf = PDF::loadview('user.cetakSewa', ['kamera' => $kamera]);
        return $pdf->stream();
    }
}
