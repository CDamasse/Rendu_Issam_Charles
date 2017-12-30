@extends('layouts.app')


@section('content')


    @foreach($articles as $article)

        <a class="list-group-item" href="/articles/{{ $article->id }}">{{ $article->title }}</a>

    @endforeach

@endsection