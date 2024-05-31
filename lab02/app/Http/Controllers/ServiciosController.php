<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function servicios()
    {
        $servicios = [
            ['titulo' => 'Desarrollo web'],
            ['titulo' => 'Diseño web'],
            ['titulo' => 'Marketing digital'],
            ['titulo' => 'Diseño web'],
            ['titulo' => 'Diseño web'],
            ['titulo' => 'Diseño web']
        ];

        return view('servicios', compact('servicios'));
    }
}
