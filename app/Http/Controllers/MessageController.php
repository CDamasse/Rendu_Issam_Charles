<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('message.index');
    }

    public function create()
    {
        $users = DB::table('users')->get();

        return view('message.create', compact('users'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'receiver' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = new Message;
        $post->receiver = $request->get('receiver');
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->save();

        return view('/message');
    }
}
