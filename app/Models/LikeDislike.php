<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeDislike extends Model
{
    use HasFactory;
    protected $table = 'likes';
    public $timestamps=true;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

   public function post()
    {
        return $this->belongsTo(product::class,'product_id');
    }


}
