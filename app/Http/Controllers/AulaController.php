<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;
use App\Models\Grado;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aulas = Aula::all();
        $grados = Grado::all();
        return view('aulas.index', compact('aulas', 'grados'));
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
        Aula::create($request->all());
        return redirect()->route('aulas.index');
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
    public function edit(Aula $aula)
    {
        $grados = Grado::all();
        return view('aulas.edit', compact('aula', 'grados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aula $aula)
    {
        $aula->update($request->all());
        return redirect()->route('aulas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aula $aula)
    {
        $aula->delete();
        return redirect()->route('aulas.index');
    }
    
}
