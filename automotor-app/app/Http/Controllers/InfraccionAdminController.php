<?php

namespace App\Http\Controllers;

use App\Models\Infracciones;
use App\Models\Auto;
use Illuminate\Http\Request;

class InfraccionAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infracciones = Infracciones::join('autos','autos.id','=','infracciones.auto_id') ->selectRaw("infracciones.*, CONCAT(autos.tipo,' ', autos.patente) as tipo_patente_autos") ->orderBy("created_at","desc") ->paginate(10);
        return view('admin.admin-lista-infraccion',['infracciones' => $infracciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datosAuto = Auto::selectRaw("autos.*, CONCAT(autos.tipo,' ', autos.patente) as datos_auto")->distinct()->get();
        $tipoInfraccion = Infracciones::selectRaw("infracciones.tipo")->distinct()->get();
        return view('nuevos.infraccion',['datosAuto' => $datosAuto , 'tipoInfraccion' => $tipoInfraccion]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Infracciones::create([
            'auto_id' => $request->auto_id,
            'fecha' => $request->fecha,
            'desripcion' => $request->descripcion,
            'tipo' => $request->tipo,
        ]);
        return redirect()->route('ListaAdminInfraccion');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detalleInfraccion = Infracciones::join('autos','autos.id','=','infracciones.auto_id') ->selectRaw("infracciones.*, CONCAT(autos.tipo,' ', autos.patente) as tipo_patente_autos") ->where('infracciones.id','=',$id) ->orderBy("created_at","desc")->first();
        return view('admin.admin-detalle-infraccion',['detalleInfraccion' => $detalleInfraccion]);
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
    public function destroy($id)
    {
        $infraccion = Infracciones::find($id);
        $infraccion->delete();
        return redirect()->route('ListaAdminInfraccion')->with('success', 'Infracción eliminada con éxito');
    }
}
