<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Jadwal;
use App\Models\Dokumen;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();
        $ngambilnip = User::where('nip', '=' , Auth::user()->nip)->get();

        return view('guru.create', compact('ngambilnip', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'mapel' => 'required',
            'rpp' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'embed' => 'required',
        ]);

        $data = Dokumen::create([
            'mapel' => $request->mapel,
            'rpp' => $request->rpp,
            'embed' => $request->embed,
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function supervisi()
    {
        $data = Jadwal::where('nip', '=' , Auth::user()->nip)->get();

        return view('guru.supervisi', ['data' => $data]);
    }

    public function supervisi_ya()
    {
        $data = User::where('nip', '=' , Auth::user()->nip)->get();


        return view('guru.supervisiya', ['data' => $data]);
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
