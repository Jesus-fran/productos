<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetViewsController extends Controller
{
    public function ViewIndex()
    {
        return view('index');
    }

    public function ViewProducto()
    {
        return view('producto');
    }

    public function ViewGaleria()
    {
        return view('galeria');
    }

    
    public function ViewConocenos()
    {
        return view('conocenos');
    }
}
