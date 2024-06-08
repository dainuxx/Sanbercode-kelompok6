<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter.index', ['dokter' => $dokter]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokter.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    		
            'nama' => 'required',
            'spesialis' => 'required',
            'telepon' => 'required',
        ],
        [
            
            'nama.required' => 'nama harus di masukkan  minimal 5 huruf',
            'spesialis.required' => 'spesialis harus di masukkan  minimal 7 huruf',
            'telepon.required' => 'masukan nomor telepon',
            
    	]);

        $dokter = new dokter;
        $dokter->nama = $request->input('nama');
        $dokter->spesialis = $request->input('spesialis');
        $dokter->telepon = $request->input('telepon');
 
        $dokter->save();
    
        return redirect('/dokter');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dokter = dokter::find($id);
        return view('dokter.app', ['dokter' => $dokter]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dokter = dokter::find($id);
        return view('dokter.edit', ['dokter' => $dokter]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'spesialis' => 'required',
            'telepon' => 'required',
        ]
        // ,
        // [
        //     'nama.required' => 'nama harus di masukkan  minimal 5 huruf',
        //     'spesialis.required' => 'spesialis   harus di masukkan  minimal 7 huruf',
        //     'telepon.required' => 'masukan nomor telepon',
            
    	// ]
    );

        dokter::where('id', $id)
        -> update([
            'nama'=>$request->input('nama'),
            'spesialis' => $request->input('spesialis'),
            'telepon' => $request->input('telepon'),
        ]);

        return redirect('/dokter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dokter::where('id', $id)->delete();
        return redirect('/dokter');
    }
}
