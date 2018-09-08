<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }


    public function addComment($body)
    {
        Comment::create([

            'body' => $body,

            'post_id' => $this->id
        ]);

    }
}
