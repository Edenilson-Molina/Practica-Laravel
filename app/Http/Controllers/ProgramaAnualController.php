<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramaAnual;
use App\Models\Aula;
use App\Models\Docente;

class ProgramaAnualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programaAnuals = ProgramaAnual::all();
        $aulas = Aula::all();
        $docentes = Docente::all();
        return view('dashboard', compact('programaAnuals', 'aulas', 'docentes'));
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
        ProgramaAnual::create($request->all());
        return redirect()->route('dashboard.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramaAnual $dashboard)
    {
        $dashboard->delete();
        return redirect()->route('dashboard.index');
    }
}
