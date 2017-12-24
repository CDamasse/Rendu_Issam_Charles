@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form action="" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" name="name" placeholder="nom" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Prenom</label>
                                <input type="text" class="form-control" name="firstName" placeholder="prenom" value="{{ old('firstName') }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" name="body" rows="3">{{ old('body') }}</textarea>
                            </div>
                            <button class="btn btn-default" type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()