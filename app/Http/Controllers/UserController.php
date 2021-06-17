<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) { // Pemilihan jika ingin melakukan pencarian
            $user = User::where('name', 'like', "%" . $request->search . "%")
                ->orwhere('email', 'like', "%" . $request->search . "%")
                ->orwhere('username', 'like', "%" . $request->search . "%")
                ->paginate(5);
            return view('User.index', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
        } else { // Pemilihan jika tidak melakukan pencarian
            //fungsi eloquent menampilkan data menggunakan pagination
            $user = User::paginate(5); // MenPagination menampilkan 5 data
            return view('User.index', compact('user'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //     return view('User.create');
    // }
    if(Auth::user()->level == 'user') {
        Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
        return redirect()->to('/');
    }
    return view('user.create');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        //fungsi eloquent untuk menambah data
        $user = new User;
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();
        //User::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('user');
        // ->route('user.index')
        // ->with('success', 'Data User Berhasil Ditambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan id User
        // $user = User::find($id);
        // return view('User.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan id User untuk diedit
        // $user = User::find($id);
        // return view('User.edit', compact('user'));
        if((Auth::user()->level == 'user') && (Auth::user()->id != $id)) {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
    }

    $data = User::findOrFail($id);

    return view('user.edit', compact('data'));
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
        //melakukan validasi data
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::find($id);
        //fungsi eloquent untuk mengupdate data inputan kita
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));

        $user->save();
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('user.index')
            ->with('success', 'Data User Berhasil Diupdate');
    }

    public function sewa()
    {
        return view('User.sewa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        User::find($id)->delete();
        return redirect()->route('user.index')
            ->with('success', 'Data User Berhasil DiHapus');
    }
    public function cetak_pdf()
    {
        $user = User::all();
        $pdf = PDF::loadview('user.cetak', ['user' => $user]);
        return $pdf->stream();
    }

}
