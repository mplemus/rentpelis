<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Alquiler;

class ControllerCliente extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clientes =  Cliente::All();
        return view('/cliente.cliente')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
        return view('/cliente.createcliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $createcliente = new Cliente();
        $createcliente->Nombre = $request->get('Nombre');
        $createcliente->Apellido = $request->get('Apellido');
        $createcliente->Direccion = $request->get('Direccion');
        $createcliente->Telefono = $request->get('Telefono');
        $createcliente->save();
        return redirect('cliente');
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
        $editcliente = Cliente::find($id);
        return view('cliente.editcliente')->with('editcliente',$editcliente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editcliente =  Cliente::find($id);
        $editcliente->Nombre = $request->get('Nombre');
        $editcliente->Apellido = $request->get('Apellido');
        $editcliente->Direccion = $request->get('Direccion');
        $editcliente->Telefono = $request->get('Telefono');
        $editcliente->save();
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarcliente = Cliente::find($id);
        $eliminarcliente->delete();
        return redirect('cliente');
    }
}
