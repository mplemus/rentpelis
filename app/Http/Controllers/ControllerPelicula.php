<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Cliente;

class ControllerPelicula extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $registro =  pelicula::All();
        return view('/pelicula.pelicula')->with('peliculas',$registro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('/pelicula.createpelicula');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $createpelicula = new Pelicula();
        $createpelicula->Titulo = $request->get('Titulo');
        $createpelicula->Descripcion = $request->get('Descripcion');
        $createpelicula->Genero = $request->get('Genero');
        $createpelicula->Año = $request->get('Año');
        $createpelicula->save();
        return redirect('pelicula');
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
        $editpelicula = Pelicula::find($id);
        return view('pelicula.editpelicula')->with('editpelicula',$editpelicula);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editpelicula =  Pelicula::find($id);
        $editpelicula->Titulo = $request->get('Titulo');
        $editpelicula->Descripcion = $request->get('Descripcion');
        $editpelicula->Genero = $request->get('Genero');
        $editpelicula->Año = $request->get('Año');
        $editpelicula->save();
        return redirect('pelicula');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarpelicula = Pelicula::find($id);
        $eliminarpelicula->delete();
        return redirect('pelicula');
    }
}

