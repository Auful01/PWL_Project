<?php

namespace App\Http\Controllers;

use App\Models\Kamera;
use App\Models\Merek;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kamera =  Kamera::with('merek')->get();
        $merek = Merek::all();
        return view('kamera', ['kamera' => $kamera, 'merek' => $merek]);
    }
}
