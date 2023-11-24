<?php

namespace App\Http\Controllers;

use App\Models\Titulares; 
use Illuminate\Http\Request;

class TitularAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titulares = Titulares::selectRaw("titulares.*, CONCAT(titulares.nombre,' ', titulares.apellido) as nombre_titular") ->orderBy("created_at","desc") ->paginate(10);
        return view('admin.admin-lista-titular',['titulares' => $titulares]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detalleTitular = Titulares::selectRaw("titulares.*, CONCAT(titulares.nombre,' ', titulares.apellido) as nombre_titular") ->where('titulares.id','=',$id) ->orderBy("created_at","desc")->first();
        return view('admin.admin-detalle-titular',['detalleTitular' => $detalleTitular]);
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
    public function destroy(string $id)
    {
        //
    }
}
