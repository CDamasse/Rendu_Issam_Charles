<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller
{
    public function index()
    {

        $articles = DB::table('articles')->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $articles = DB::table('articles')->find($id);

        return view('articles.show', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = new Articles;
        $post->author = $request->user()->name;
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->image = $request->get('image');
        $post->save();

        return redirect()->route('articles.index');
    }
}
