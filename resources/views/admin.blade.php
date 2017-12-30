@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <ul class="list-group">
                        @foreach($articles as $article)

                            <li class="list-group-item"><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li>
                                <a href="/articles/destroy/{{ $article->id }}" role="button" class="btn btn-danger">Supprimer</a>

                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection