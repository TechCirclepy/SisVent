<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = Cliente::all();
        return view('admin.cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cliente = new Cliente;
        return view('admin.cliente.agregar', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cliente = new Cliente;
        $cliente->ruc_cliente = $request->ruc_cliente;
        $cliente->nombre_cliente = $request->nombre_cliente;
        $cliente->direccion_cliente = $request->direccion_cliente;
        $cliente->telefono_cliente = $request->telefono_cliente;
        $cliente->email_cliente = $request->email_cliente;
        if($cliente -> save()){
            return redirect("/cliente")->with('addCliente', 'Cliente agregado correctamente!');
        }else{
            return view("admin.cliente.agregar", ["cliente" => $cliente]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente = Cliente::find($id);
        return view("admin.cliente.edit", compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $cliente = Cliente::find($id);
        $cliente->ruc_cliente = $request->ruc_cliente;
        $cliente->nombre_cliente = $request->nombre_cliente;
        $cliente->direccion_cliente = $request->direccion_cliente;
        $cliente->telefono_cliente = $request->telefono_cliente;
        $cliente->email_cliente = $request->email_cliente;
        if($cliente -> save()){
            return redirect("/cliente")->with('addCliente', 'Cliente editado correctamente!');
        }else{
            return view("admin.cliente.edit", ["cliente" => $cliente]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect("/cliente")->with('Cliente', 'Cliente eliminado correctamente!');
    }
}
