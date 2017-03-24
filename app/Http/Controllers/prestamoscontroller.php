<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\prestamos;

class prestamoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        $dato=request()->all();
        prestamos::create($dato);
    }

        public function consultar_prestamos()
    {
        $prestamos=prestamos::all();
        return view ('consultar_prestamos',compact('prestamos'));
    }

    public function Editar($id)
    {
        $prestamos=prestamos::findOrFail($id);
        return view ('actualizar_prestamos',compact('prestamos'));

    }

    public function actualizar($id)
    {
        $prestamos=prestamos::findOrFail($id);
        $data=request()->all();
        $prestamos->fill($data)->save();
        return redirect()->to('consultar_prestamos');

    }
    public function Eliminar($id)
    {
        $prestamos=prestamos::findOrFail($id);
        $data=request()->all();
        $prestamos->fill($data)->delete();
        return redirect()->to('consultar_prestamos');
    }
}
