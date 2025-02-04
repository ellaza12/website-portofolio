<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendidikans = Pendidikan::all();
        return view('pendidikan.index', compact('pendidikans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'institusi' => 'required|string|max:255',
            'nama_sekolah' => 'required|string|max:255',
            'rentang_waktu' => 'nullable|string|max:255',
        ]);

        Pendidikan::create($request->all());
        return redirect()->route('pendidikan.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        return view('pendidikan.edit', compact('pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'institusi' => 'required|string|max:255',
            'nama_sekolah' => 'required|string|max:255',
            'rentang_waktu' => 'nullable|string|max:255',
        ]);

        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->update([
            'institusi' => $request->institusi,
            'nama_sekolah' => $request->nama_sekolah,
            'rentang_waktu' => $request->rentang_waktu,
        ]);
        
        return redirect()->route('pendidikan.index')->with('success','data berhasil di edit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->delete();

        return redirect() ->route('pendidikan.index')->with('success','data berhasil di hapus');
    }
}
