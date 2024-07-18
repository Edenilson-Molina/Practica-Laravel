<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grado;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grados = Grado::all();
        return view('grados.index', compact('grados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Grado::create($request->all());
        return redirect()->route('grados.index');
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
    public function edit(Grado $grado)
    {
        return view('grados.edit', compact('grado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grado $grado)
    {
        $grado->update($request->all());
        return redirect()->route('grados.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grado $grado) 
    {
        $grado->delete();
        return redirect()->route('grados.index');
    }
}
