@extends('layouts.app')

@section('content')
        <div class="panel-body">
            <h1>Articles</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                <tr>
                    <td><a href="/articles/{{ $article->id }}" class="list-group-item">{{ $article->title }}</a></td>
                    <td>{{ $article->author }}</td>
                    <td><a href="/delete/{{ $article->id }}" role="button" class="btn btn-danger">Supprimer</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection