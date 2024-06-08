<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Janji; // Menggunakan model Janji

class JanjiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $janji = Janji::all(); 
        return view('janji.index', ['janji' => $janji]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('janji.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    		// Sesuaikan validasi dengan kebutuhan Janji
        ],
        [
            // Sesuaikan pesan error dengan kebutuhan Janji
    	]);

        $janji = new Janji; 
        // Sesuaikan pengisian data dengan kebutuhan Janji

        $janji->save();
    
        return redirect('/janji');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $janji = Janji::find($id); 
        return view('janji.show', ['janji' => $janji]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $janji = Janji::find($id); 
        return view('janji.edit', ['janji' => $janji]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
    		// Sesuaikan validasi dengan kebutuhan Janji
        ],
        [
            // Sesuaikan pesan error dengan kebutuhan Janji
    	]);

        Janji::where('id', $id)
        -> update([
            // Sesuaikan pengisian data dengan kebutuhan Janji
        ]);

        return redirect('/janji');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Janji::where('id', $id)->delete();
        return redirect('/janji');
    }
}
