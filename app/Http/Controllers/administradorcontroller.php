<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\administrador;

class administradorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dato=request()->all();
        administrador::create($dato);
    }

        public function consultar_administrador()
    {
        $administrador=administrador::all();
        return view ('consultar_administrador',compact('administrador'));
    }

    public function Editar($id)
    {
        $administrador=administrador::findOrFail($id);
        return view ('actualizar_administrador',compact('administrador'));

    }

    public function actualizar($id)
    {
        $administrador=administrador::findOrFail($id);
        $data=request()->all();
        $administrador->fill($data)->save();
        return redirect()->to('consultar_administrador');

    }
    public function Eliminar($id)
    {
        $administrador=administrador::findOrFail($id);
        $data=request()->all();
        $administrador->fill($data)->delete();
        return redirect()->to('consultar_administrador');
    }
    


}
