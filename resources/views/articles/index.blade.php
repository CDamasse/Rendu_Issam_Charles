@extends('layouts.app')


@section('content')

    @foreach($articles as $article)

        <a class="list-group-item" href="/articles/{{ $article->id }}">{{ $article->title }}</a>

    @endforeach
    <a href="{{ route('articles.create') }}" role="button" class="btn btn-default">Nouvel article</a>

@endsection