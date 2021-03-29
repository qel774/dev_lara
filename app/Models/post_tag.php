<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_tag extends Model
{
    use HasFactory;


    public function posts()
    {
        return $this->belongsTo('posts');
    }

    public function tags()
    {
        return $this->belongsTo('tags');
    }
}
