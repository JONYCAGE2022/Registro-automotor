<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class AutoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autos = Auto::join('titulares','titulares.id','=','autos.titular_id') ->selectRaw("autos.*, CONCAT(titulares.nombre,' ', titulares.apellido) as nombre_titular") ->orderBy("created_at","desc") ->paginate(10);
        return view('admin.admin-lista-automotor',['autos' => $autos]);
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
        $detalleAuto = Auto::join('titulares','titulares.id','=','autos.titular_id') ->selectRaw("autos.*, CONCAT(titulares.nombre,' ', titulares.apellido) as nombre_titular") ->where('autos.id','=',$id) ->orderBy("created_at","desc")->first();
        return view('admin.admin-detalle-automotor',['detalleAuto' => $detalleAuto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $detalleAuto = Auto::join('titulares','titulares.id','=','autos.titular_id') ->selectRaw("autos.*, CONCAT(titulares.nombre,' ', titulares.apellido) as nombre_titular") ->where('autos.id','=',$id) ->orderBy("created_at","desc")->first();
        return view('edit.editAutomotor',['detalleAuto' => $detalleAuto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $automotor = Auto::find($id);
        $automotor->update([
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'patente' => $request->patente
        ]);
        return redirect()->route('ListaAdminAutomotor')->with('success', 'Automotor actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $automotor = Auto::find($id);
        $automotor->delete();
        return redirect()->route('ListaAdminAutomotor')->with('success', 'Automotor eliminado con éxito');
    }
}