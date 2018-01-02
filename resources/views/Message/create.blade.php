@extends('layouts.app')

@section('content')

    <h1>Envoyer un message</h1>

    <form action="{{ route('message.store') }}" method="POST">
        <div class="form-group">
            <label for="">Envoyer à</label>
            <select id="" class="form-control">
                @foreach($users as $user)
                <option value="" name="receiver">{{ $user->name }}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="name">Objet</label>
                <input type="text" class="form-control" name="title" placeholder="Objet" value="{{ old('title') }}">
            </div>
            <div class="form-group ">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" name="body" rows="3">{{ old('body') }}</textarea>
            </div>
        </div>
        <button class="btn btn-default" type="submit">Envoyer</button>
    </form>

@endsection()