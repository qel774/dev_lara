<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    
    /**
     * テーブルに関連付ける主キー
     * 
     * @var string
     */
    protected $primaryKey = 'id';



    public function posts()
    {
        // 1:多
        return $this->hasMany('App\Models\posts');
    }

    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }
}
