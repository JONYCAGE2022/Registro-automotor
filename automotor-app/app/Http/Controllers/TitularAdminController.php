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


    public function buscar (Request $request)
    {
        $buscar = $request->buscar;
        $titulares = Titulares::selectRaw("titulares.*, CONCAT(titulares.nombre,' ', titulares.apellido) as nombre_titular") ->orderBy("created_at","desc")->where('dni','like','%'.$buscar.'%')->paginate(10);
        return view('admin.admin-lista-titular',['titulares' => $titulares]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('nuevos.titular');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Titulares::create([
            'apellido' => $request->apellido,
            'nombre' => $request->nombre,
            'dni' => $request->dni,
            'domicilio' => $request->domicilio,
        ]);
        return redirect()->route('ListaAdminTitular')->with('success', 'Titular cargado con éxito');;
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
    public function edit($id)
    {
        $detalleTitular = Titulares::selectRaw("titulares.*") ->where('titulares.id','=',$id) ->orderBy("created_at","desc")->first();
        return view('edit.editTitular',['detalleTitular' => $detalleTitular]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $automotor = Titulares::find($id);
        $automotor->update([
            'apellido' => $request->apellido,
            'nombre' => $request->nombre,
            'dni' => $request->dni,
            'domicilio' => $request->domicilio
        ]);
        return redirect()->route('ListaAdminTitular')->with('success', 'Titular actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $titular = Titulares::find($id);
        $titular->delete();
        return redirect()->route('ListaAdminTitular')->with('success', 'Titular eliminado con éxito');
    }
}
