<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proveedors = Proveedor::all();
        return view('admin.proveedor.index', compact('proveedors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $proveedor = new Proveedor;
        return view('admin.proveedor.agregar', compact('proveedor'));
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
        $proveedor = new Proveedor;
        $proveedor->ruc_proveedor = $request->ruc_proveedor;
        $proveedor->nombre_proveedor = $request->nombre_proveedor;
        $proveedor->direccion_proveedor = $request->direccion_proveedor;
        $proveedor->telefono_proveedor = $request->telefono_proveedor;
        $proveedor->email_proveedor = $request->email_proveedor;
        if($proveedor -> save()){
            return redirect("/proveedor")->with('addProveedor', 'Proveedor agregado correctamente!');
        }else{
            return view("admin.proveedor.agregar", ["proveedor" => $proveedor]);
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
        $proveedor = Proveedor::find($id);
        return view("admin.proveedor.edit", compact('proveedor'));
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
        $proveedor = Proveedor::find($id);
        $proveedor->ruc_proveedor = $request->ruc_proveedor;
        $proveedor->nombre_proveedor = $request->nombre_proveedor;
        $proveedor->direccion_proveedor = $request->direccion_proveedor;
        $proveedor->telefono_proveedor = $request->telefono_proveedor;
        $proveedor->email_proveedor = $request->email_proveedor;
        if($proveedor -> save()){
            return redirect("/proveedor")->with('addProveedor', 'Proveedor editado correctamente!');
        }else{
            return view("admin.proveedor.edit", ["proveedor" => $proveedor]);
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
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return redirect("/proveedor")->with('Proveedor', 'Proveedor eliminado correctamente!');
    }
}
