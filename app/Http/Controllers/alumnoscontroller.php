<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\alumnos;

class alumnoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function consultar_alumnos()
    {
        $alumnos=alumnos::all();
        return view ('consultar_alumnos',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dato=request()->all();
        alumnos::create($dato);

    }
    public function Editar($id)
    {
        $alumnos=alumnos::findOrFail($id);
        return view ('actualizar_alumnos',compact('alumnos'));

    }

    public function actualizar($id)
    {
        $alumnos=alumnos::findOrFail($id);
        $data=request()->all();
        $alumnos->fill($data)->save();
        return redirect()->to('consultar_alumnos');

    }
    public function Eliminar($id)
    {
        $alumnos=alumnos::findOrFail($id);
        $data=request()->all();
        $alumnos->fill($data)->delete();
        return redirect()->to('consultar_alumnos');
    }

  

}
