<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\entrenador;

class entrenadorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        $dato=request()->all();
        entrenador::create($dato);
    }

        public function consultar_entrenador()
    {
        $entrenador=entrenador::all();
        return view ('consultar_entrenador',compact('entrenador'));
    }

    public function Editar($id)
    {
        $entrenador=entrenador::findOrFail($id);
        return view ('actualizar_entrenador',compact('entrenador'));

    }

    public function actualizar($id)
    {
        $entrenador=entrenador::findOrFail($id);
        $data=request()->all();
        $entrenador->fill($data)->save();
        return redirect()->to('consultar_entrenador');

    }
    public function Eliminar($id)
    {
        $entrenador=entrenador::findOrFail($id);
        $data=request()->all();
        $entrenador->fill($data)->delete();
        return redirect()->to('consultar_entrenador');
    }
}
