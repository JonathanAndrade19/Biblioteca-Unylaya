<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use Illuminate\Support\Facades\Redirect;

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

    public function add( Request $request ){
        $autor = new Autor();
        $autor = $autor->create($request->all());
        return Redirect::to('/autors');

    }

    public function edit( $id ){
        $autor = Autor::findOrFail( $id );
        return view('autor.form',['autor' => $autor]);
    }

    public function update( $id, Request $request )
    {
        $autor = Autor::findOrFail( $id );
        $autor->update($request->all());
        return Redirect::to('/autors');
    }

    public function delete( $id )
    {
        $autor = Autor::findOrFail( $id );
        $autor->delete();
        return Redirect::to('/autors');
    }

}
