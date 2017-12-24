@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @foreach($articles as $article)

                            <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li>

                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection