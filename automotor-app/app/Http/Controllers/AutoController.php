<?php


namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autos = Auto::join('titulares','titulares.id','=','autos.titular_id') ->selectRaw("autos.*, CONCAT(titulares.nombre,' ', titulares.apellido) as nombre_titular") ->orderBy("created_at","desc") ->paginate(10);
        return view('lista.lista-automotor',['autos' => $autos]);
    }

    public function buscar (Request $request)
    {
        $buscar = $request->buscar;
        $autos = Auto::join('titulares','titulares.id','=','autos.titular_id')->selectRaw("autos.*, CONCAT(titulares.nombre,' ', titulares.apellido) as nombre_titular")->where('patente','like','%'.$buscar.'%')->orderBy("created_at","desc")->paginate(10);
        return view('lista.lista-automotor',['autos' => $autos]);
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
        return view('detalle.detalle-automotor',['detalleAuto' => $detalleAuto]);
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
