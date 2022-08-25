<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Conner\Likeable\Likeable;
class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    // public $timestamps=false;
    public $timestamps=true;

    public function likes1(){
        return $this->hasMany('App\models\LikeDislike','content_id')->sum('like');
    }
    // Dislikes
    public function dislikes(){
        return $this->hasMany('App\models\LikeDislike','content_id')->sum('dislike');
    }


<<<<<<< HEAD

=======
    public function user() {
        return $this->belongsTo('App\models\User');
    }


  
>>>>>>> 2a09ad3e26d12c9ec877e741e4687544d17258f6

    // public function likes()
    // {
    //     return $this->belongsToMany(User::class,LikeDislike::class);
    // }

}
