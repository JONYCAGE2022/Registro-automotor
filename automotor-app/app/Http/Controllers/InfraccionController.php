<?php

namespace App\Http\Controllers;

use App\Models\Infracciones;
use Illuminate\Http\Request;

class InfraccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infracciones = Infracciones::join('autos','autos.id','=','infracciones.auto_id') ->selectRaw("infracciones.*, CONCAT(autos.tipo,' ', autos.patente) as tipo_patente_autos") ->orderBy("created_at","desc") ->paginate(10);
        return view('lista.lista-infraccion',['infracciones' => $infracciones]);
    }

    public function buscar (Request $request)
    {
        $buscar = $request->buscar;
        $infracciones = Infracciones::join('autos','autos.id','=','infracciones.auto_id') ->selectRaw("infracciones.*, CONCAT(autos.tipo,' ', autos.patente) as tipo_patente_autos")->where('patente','like','%'.$buscar.'%')->orderBy("created_at","desc") ->paginate(10);
        return view('lista.lista-infraccion',['infracciones' => $infracciones]);
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
        $detalleInfraccion = Infracciones::join('autos','autos.id','=','infracciones.auto_id') ->selectRaw("infracciones.*, CONCAT(autos.tipo,' ', autos.patente) as tipo_patente_autos") ->where('infracciones.id','=',$id) ->orderBy("created_at","desc")->first();
        return view('detalle.detalle-infraccion',['detalleInfraccion' => $detalleInfraccion]);
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
