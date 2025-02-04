<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatihans = Pelatihan::all();
        return view('pelatihan.index', compact('pelatihans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelatihan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelatihan' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gambarPath = $request->file('gambar')->store('pelatihan','public');

        Pelatihan::create([
            'nama_pelatihan' => $request->nama_pelatihan,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('pelatihan.index');
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
        $pelatihan = Pelatihan::findOrFail($id);
        return view('pelatihan.edit', compact('pelatihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pelatihan' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        $pelatihan = Pelatihan::findOrFail($id);

        if($request->hasFile('gambar')) {

            if($pelatihan->gambar) {
                Storage::disk('public')->delete($pelatihan->gambar);
            }
            
            $gambarPath = $request->file('gambar')->store('pelatihan','public');
            $pelatihan-> gambar = $gambarPath;
            

        }

        $pelatihan-> nama_pelatihan = $request->nama_pelatihan;
        $pelatihan->deskripsi = $request->deskripsi;
        $pelatihan->save();
        
        return redirect()->route('pelatihan.index')->with('success','data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelatihan = Pelatihan::findOrFail($id);

        if ($pelatihan->gambar) {
            Storage::disk('public')->delete($pelatihan->gambar);
        }

        $pelatihan->delete();

        return redirect() ->route('pelatihan.index')->with('success','data berhasil di hapus');
    }
}
