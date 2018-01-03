<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

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

        return view('articles.show', compact('articles', 'url'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'title' => 'required',
                'body' => 'required',
            ]);

            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('public/uploads', $filename);

            $post = new Articles;
            $post->author = $request->user()->name;
            $post->title = $request->get('title');
            $post->body = $request->get('body');
            $post->image = $request->image->getClientOriginalName();
            $post->save();
            //Storage::putFile('public', $request->file('image'))

            return redirect()->route('articles.index');
        }else{
            return 'aucune image selectionée';
        }

    }
}
