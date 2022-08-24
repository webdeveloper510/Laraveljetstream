<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Conner\Likeable\Likeable;
class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    public $timestamps=true;

    public function likes(){
        return $this->hasMany('App\models\LikeDislike','content_id')->sum('like');
    }
    // Dislikes
    public function dislikes(){
        return $this->hasMany('App\models\LikeDislike','content_id')->sum('dislike');
    }

}
