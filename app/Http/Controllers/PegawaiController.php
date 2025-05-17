<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Collection;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pegawai = new Collection();
        $nama = $request->nama;
        if(isset($nama)) {
            $pegawai = Pegawai::where('nama', 'LIKE', "%" . $nama . "%")->get();
        } else {
            $pegawai = Pegawai::all();
        }
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'pangkat' => 'required',
            'alamat' => 'required'
        ]);
        $pegawai = Pegawai::create($validatedData);
        return redirect('/pegawai')->with('success', 'pegawai berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'pangkat' => 'required',
            'alamat' => 'required'
        ]);
        $pegawai->update($validatedData);
        return redirect('/pegawai')->with('success', 'berhasil update data pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect('/pegawai')->with('success', 'berhasil hapus data pegawai');
    }
}
