<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    public function person(){
        return $this->belongTO('Person');
    }

    public function post_tag(){
        return $this->hasMany('post_tag');
    }

    public function getTitle(){
        return $this->id . ':' . $this->title .  ":" . $this->person->name;
    }
}
