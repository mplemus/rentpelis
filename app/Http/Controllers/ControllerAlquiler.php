<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alquiler;
use App\Models\Cliente;
use App\Models\Pelicula;

class ControllerAlquiler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $registro =  Alquiler::All();
        return view('/alquiler.alquiler')->with('alquilers',$registro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('/alquiler.createalquiler');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $creatalquiler = new Alquiler();
        $creatalquiler->cliente_id = $request->get('cliente_id');
        $creatalquiler->pelicula_id = $request->get('pelicula_id');
        $creatalquiler->FechaAlquiler = $request->get('FechaAlquiler');
        $creatalquiler->FechaDevolucion = $request->get('FechaDevolucion');
        $creatalquiler->save();
        return redirect('alquiler');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cliente = Cliente::find($id);
        $alquilers = Alquiler:: All();
        return view('/alquiler.indexalquiler')->with('alquilers',$alquilers)->with('cliente',$cliente);
    }

    public function show2(string $id)
    {
        //
        $pelicula = Pelicula::find($id);
        $alquilers = Alquiler:: All();
        return view('/alquiler.indexalquiler2')->with('alquilers',$alquilers)->with('pelicula',$pelicula);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editalquiler = Alquiler::find($id);
        return view('alquiler.editalquiler')->with('editalquiler',$editalquiler);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editalquiler = Alquiler::find($id);
        $editalquiler->cliente_id = $request->get('cliente_id');
        $editalquiler->pelicula_id = $request->get('pelicula_id');
        $editalquiler->FechaAlquiler = $request->get('FechaAlquiler');
        $editalquiler->FechaDevolucion = $request->get('FechaDevolucion');
        $editalquiler->save();
        return redirect('alquiler');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminaralquiler = Alquiler::find($id);
        $eliminaralquiler->delete();
        return redirect('alquiler');
    }
}
