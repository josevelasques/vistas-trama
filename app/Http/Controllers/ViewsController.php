<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function mostrarListaArticulos()
    {
        return view('pages.articulos');
    }

    public function mostrarListaCategorias()
    {
        return view('pages.categories');
    }
}
