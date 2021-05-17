<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suit;

class SuitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Suit::all();
        $data = [
            'articles' => $articles
            ];
        return view('suits.articles', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('suits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // @dd($request);
        $request->validate([
            'modello' => 'required|unique:suits|max:255',
            'marca' => 'required|max:255',
            'img' => 'required',
            'info' => 'required'
        ]);

        $data = $request->all();

        $new_article = new Suit();

        // $new_article->modello = $data['modello'];
        // $new_article->marca = $data['marca'];
        // $new_article->img = $data['img'];
        // $new_article->info = $data['info'];

        $new_article->fill($data);

        $new_article->save();

        return redirect()->route('articles.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if($id) {
            $article = Suit::find($id);
        // @dd($data);
        $data = [
            'article' => $article
        ];
        return view('suits.show', $data);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Suit $article)
    {
        //
        // @dd($article);
        return view('suits.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suit $article)
    {
        //
        $data = $request->all();
        // @dd($data);
        $article->update($data);

        return redirect()->route('articles.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suit $article)
    {
        //
        $article->delete();
        return redirect()->route('articles.index');
    }
}
