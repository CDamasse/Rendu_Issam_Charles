@extends('layouts.app')

@section('content')

    <a href="" class="list-group-item list-group-item-info">Messagerie</a>
    <a href="" class=""></a>
    @if(Auth::user() &&  Auth::user()->admin == 1)
        <a href="{{ route('admin.index') }}" class="list-group-item list-group-item-warning">Administration</a>
    @endif()

@endsection