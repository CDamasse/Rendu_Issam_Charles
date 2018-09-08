@extends('layouts.app')


@section('content')

    @foreach($article as $articles)

        <a class="list-group-item" href="/articles/{{ $articles->id }}">{{ $articles->title }}</a>

    @endforeach
    <a href="{{ route('articles.create') }}" role="button" class="btn btn-default">Nouvel article</a>

@endsection