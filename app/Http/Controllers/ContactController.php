<?php

namespace App\Http\Controllers;


use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'title' => 'required',
            'body' =>'required',
        ]);

        $post = new Contact;
        $post->name = $request->get('name');
        $post->email = $request->get('email');
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->save();


        return redirect('/contact');
    }
}
