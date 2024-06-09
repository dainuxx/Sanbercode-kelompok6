<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien.index', ['pasien' => $pasien]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    		'nama' => 'required|min:5',
            'umur' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ],
        [
            'nama.required' => 'Nama harus di isi minimal 5 huruf',
            'umur.required' => 'Masukan umur dalam angka',
            'alamat.required' => 'Tambahkan alamat',
            'telepon.required' => 'masukan nomor telepon',
            
    	]);

        $pasien = new pasien;
        $pasien->nama = $request->input('nama');
        $pasien->umur = $request->input('umur');
        $pasien->alamat = $request->input('alamat');
        $pasien->telepon = $request->input('telepon');
 
        $pasien->save();
    
        return redirect('/pasien');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.show', ['pasien' => $pasien]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit', ['pasien' => $pasien]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
    		'nama' => 'required|min:5',
            'umur' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ],
        [
            'nama.required' => 'Nama harus di isi minimal 5 huruf',
            'umur.required' => 'Masukan umur dalam angka',
            'alamat.required' => 'Tambahkan alamat',
            'telepon.required' => 'masukan nomor telepon',
            
    	]);

        Pasien::where('id', $id)
        -> update([
            'nama'=>$request->input('nama'),
            'umur'=>$request->input('umur'),
            'alamat' => $request->input('alamat'),
            'telepon' => $request->input('telepon'),
        ]);

        return redirect('/pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pasien::where('id', $id)->delete();
        return redirect('/pasien');
    }
}
