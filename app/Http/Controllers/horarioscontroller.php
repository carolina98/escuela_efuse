<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\horarios;

class horarioscontroller extends Controller
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
        horarios::create($dato);
    }

        public function consultar_horarios()
    {
        $horarios=horarios::all();
        return view ('consultar_horarios',compact('horarios'));
    }

    public function Editar($id)
    {
        $horarios=horarios::findOrFail($id);
        return view ('actualizar_horarios',compact('horarios'));

    }

    public function actualizar($id)
    {
        $horarios=horarios::findOrFail($id);
        $data=request()->all();
        $horarios->fill($data)->save();
        return redirect()->to('consultar_horarios');

    }
    public function Eliminar($id)
    {
        $horarios=horarios::findOrFail($id);
        $data=request()->all();
        $horarios->fill($data)->delete();
        return redirect()->to('consultar_horarios');
    }
    
}
