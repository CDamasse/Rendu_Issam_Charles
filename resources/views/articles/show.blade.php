@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{ $articles->title }}</h1>
                        <p>{{ $articles->body }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection