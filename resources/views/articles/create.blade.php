@extends('layouts.app')

@section('content')

    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <input class="form-control" name="title" placeholder="Titre" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <textarea class="form-control" name="body" placeholder="Texte">
                {{ old('body') }}
            </textarea>
        </div>

        <div class="form-group">
            <input type="file" class="form-control-file" name="image">
        </div>

        <button type="submit" class="btn btn-default">Sauvegarder</button>
    </form>

@endsection