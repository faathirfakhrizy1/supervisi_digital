<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;

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

    public function show(){
        $data = User::all();

        return view('kurikulum.list', ['data' => $data]);
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nip' => ['required', 'integer', 'min:8', 'unique:users'],
            'alamat' => 'required',
            'role' => 'required',
        ]);

        $data = User::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'role' => $request->role,
            'password' =>  Hash::make($request->nip)
        ]);

        return redirect()->route('kuri.list');
    }

    public function create()
    {
        $data = User::all();
        return view('kurikulum.create');
    }

    public function diaktifkan($id){
        User::find($id)->update([
            'supervisor' => 1
        ]);

        return redirect()->back();
    }


    public function nonaktif($id)
    {
        User::find($id)->update([
            'supervisor' => 0
        ]);

        return redirect()->back();
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'kurikulum')
        {
            return view('kurikulum.index');
        }elseif(Auth::user()->role == 'guru'){
            return view('guru.index');
        }elseif(Auth::user()->role == 'kepsek'){
            return view('kepsek.index');
        }
        return view('home');
    }

    public function destroy($id)
    {
        $data = User::destroy($id);
        return redirect()->back();
    }

    public function edit($id)
    {
        $data = User::where('id', $id)->get();
        // dd($schedit);
        return view('kurikulum.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = User::where('id', $id);

        $data->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'role' => $request->role,
        ]);
        return redirect()->route('kuri.list');

    }
}
