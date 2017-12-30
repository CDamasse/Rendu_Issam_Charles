<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $articles = DB::table('articles')->get();

        return view('admin', compact('articles'));
    }

    public function show($id)
    {
        $articles = DB::table('articles')->find($id);

        return view('articles.show', compact('articles'));
    }
}
