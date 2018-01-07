@extends('layouts.app')

@section('content')

    <h1>{{ $articles->title }}</h1>
    <p>{{ $articles->body }}</p>
    <img src="{{ asset('storage/uploads/'.$articles->image) }}" class="img-fluid" alt="Responsive image" style="width: 100%;">

    <div class="comments">

        <ul class="list-group">

            @foreach ($post->comments as $comment)

                <li class="list-group-item">

                    <strong>

                        {{ $comment->created_at->diffForHumans() }}: &nbsp ;

                    </strong>

                    {{ $comment->body }}
                </li>

            @endforeach
        </ul>

    </div>

    <div class="card">

        <div class="card-block">

            <form method="POST" action="/article/{id}/comments/">


                <div class="form-group">
                     <textarea name="body" placeholder="Your comment here." class="form-control">
                     </textarea>
                </div>


                <div class="form-group">

                    <button type="submit" class="btn btn-primary"> Add Comment</button>

                </div>

            </form>
        </div>

    </div>




@endsection



