@extends('layouts.app')

@section('content')

    <h1>{{ $articles->title }}</h1>
    <p>{{ $articles->body }}</p>

@endsection