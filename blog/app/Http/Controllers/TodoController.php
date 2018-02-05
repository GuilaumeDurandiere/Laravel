<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
     public function index()
    {
        return Article::all();
    }
 
    public function show()
    {
        return array ("todos"  => array( array("id" => "1", "libelle" => "rien"),array("id" => "2", "libelle" => "encore rien")));
}


    

    public function store(Request $request)
    {
        return Article::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 204;
    }
}
