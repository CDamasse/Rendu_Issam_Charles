@extends('layouts.app')

@section('content')

    <h1>{{ $articles->title }}</h1>
    <p>{{ $articles->body }}</p>
    <img src="{{ asset('storage/uploads/'.$articles->image) }}" class="img-fluid" alt="Responsive image" style="width: 100%;">
@endsection

