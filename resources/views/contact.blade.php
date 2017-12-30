@extends('layouts.app')

@section('content')



    <div class="panel-heading">
        <h1>Contact</h1>
    </div>

    <div class="panel-body">
        @if(count($errors) > 0)
            <ul class="bg-danger">
                @foreach($errors->all() as $error)
                    <li><b>{{ $error }}</b></li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('contact.store') }}" method="POST">
            {{ csrf_field() }}

            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="nom" value="{{ old('name') }}">
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com"
                       value="{{ old('email') }}">
            </div>
            <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                <label for="name">Objet</label>
                <input type="text" class="form-control" name="title" placeholder="Objet" value="{{ old('title') }}">
            </div>
            <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" name="body" rows="3">{{ old('body') }}</textarea>
            </div>
            <button class="btn btn-default" type="submit">Envoyer</button>
        </form>

@endsection()