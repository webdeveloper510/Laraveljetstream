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
    // public $timestamps=false;
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
      
=======
       return $this->belongsTo('App\models\User','user_id');
>>>>>>> def3a51fe3b698ec989b182f70938a596b042af0
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getCommentsCount()
    {
        return $this->comments()->count();
    }


<<<<<<< HEAD
    

    

    public function ratings()
    {
        return $this->hasMany('App\Models\product_rating');
    }
=======



>>>>>>> def3a51fe3b698ec989b182f70938a596b042af0
}
