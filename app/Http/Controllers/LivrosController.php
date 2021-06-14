<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;
use Illuminate\Support\Facades\Redirect;


class LivrosController extends Controller
{
    public function index()
    {
        $livros = Livros::all();

        return view('livros.listLivros', ['livros'=> $livros]);
    }

    public function newLivros()
    {
        return view('livros.form');
    }

    public function add( Request $request ){
        $livros = new Livros();
        $livros = $livros->create($request->all());
        return Redirect::to('/livros');

    }

    public function edit( $id ){
        $livros = Livros::findOrFail( $id );
        return view('livros.form',['livros' => $livros]);
    }

    public function update( $id, Request $request )
    {
        $livros = Livros::findOrFail( $id );
        $livros->update($request->all());
        return Redirect::to('/livros');
    }

    public function delete( $id )
    {
        $livros = Livros::findOrFail( $id );
        $livros->delete();
        return Redirect::to('/livros');
    }
}
