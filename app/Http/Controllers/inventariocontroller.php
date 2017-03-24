<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\inventario;

class inventariocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        $dato=request()->all();
        inventario::create($dato);
    }

        public function consultar_inventario()
    {
        $inventario=inventario::all();
        return view ('consultar_inventario',compact('inventario'));
    }

    public function Editar($id)
    {
        $inventario=inventario::findOrFail($id);
        return view ('actualizar_inventario',compact('inventario'));

    }

    public function actualizar($id)
    {
        $inventario=inventario::findOrFail($id);
        $data=request()->all();
        $inventario->fill($data)->save();
        return redirect()->to('consultar_inventario');

    }
    public function Eliminar($id)
    {
        $inventario=inventario::findOrFail($id);
        $data=request()->all();
        $inventario->fill($data)->delete();
        return redirect()->to('consultar_inventario');
    }
}

