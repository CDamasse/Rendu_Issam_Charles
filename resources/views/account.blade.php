@extends('layouts.app')

@section('content')

    <a href="{{ route('message.index') }}" class="list-group-item list-group-item-info">Messagerie</a>
    @if(Auth::user() &&  Auth::user()->admin == 1)
        <a href="{{ route('admin.index') }}" class="list-group-item list-group-item-warning">Administration</a>
    @endif()

@endsection