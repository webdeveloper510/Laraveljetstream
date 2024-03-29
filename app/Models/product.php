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

    protected $appends = [
        'average-rating'
    ];


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

        return $this->belongsTo('App\models\User','user_id');
    }
   public function comments()
    {
        return $this->hasMany(Comment::class)->where('parent_id', '=', 0)->orderBy('created_at','desc');
    }

    public function getCommentsCount()
    {
        return $this->comments()->count();
    }

    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }

    public function getAverageRatingAttribute(){
        return round($this->ratings()->avg('rating'),1);
    }

}
