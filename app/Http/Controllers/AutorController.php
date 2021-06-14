<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::all();

        return view('autor.listAutor', ['autores'=> $autores]);
    }

    public function newAutor()
    {
        return view('autor.form');
    }

}
