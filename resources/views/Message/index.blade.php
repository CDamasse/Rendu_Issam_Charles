@extends('layouts.app')

@section('content')

    <div class="panel-body">
        <h1>Messagerie</h1>
        <a href="{{ route('message.create') }}" role="button" class="btn btn-default">Nouveau message</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Auteur</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <td><a href="" class="list-group-item"></a></td>
                    <td></td>
                    <td><a href="" role="button" class="btn btn-danger"></a></td>
                </tr>

            </tbody>
        </table>
    </div>

@endsection()