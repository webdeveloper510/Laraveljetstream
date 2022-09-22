<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Conner\Likeable\Likeable;
class product extends Model
{
    use HasFactory;
    public $incrementing = true;
    protected $table = 'product';
    public $timestamps=true;

    public function likes1(){
        return $this->hasMany('App\models\LikeDislike','content_id')->sum('like');
    }

    // Dislikes

      public function dislikes(){
        return $this->hasMany('App\models\LikeDislike','content_id')->sum('dislike');
      }

    public function like()
    {
        return $this->hasMany(LikeDislike::class,'product_id');
    }
    public function user() {
<<<<<<< HEAD
        return $this->belongsTo('App\models\User','user_id');
      
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
=======

        return $this->belongsTo('App\models\User','user_id');
>>>>>>> 845e1f85820dddc9629f3607546adfff36edc2ea
    }

        public function comments()
    {
        return $this->hasMany(Comment::class)->where('parent_id', '=', 0);
    }
<<<<<<< HEAD


    

    
=======
        public function getCommentsCount()
        {
            return $this->comments()->count();
        }
>>>>>>> 845e1f85820dddc9629f3607546adfff36edc2ea

    public function ratings()
    {
        return $this->hasMany('App\Models\product_rating');
    }
<<<<<<< HEAD
=======

>>>>>>> 845e1f85820dddc9629f3607546adfff36edc2ea
}
