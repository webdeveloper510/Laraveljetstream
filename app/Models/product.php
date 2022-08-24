<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Conner\Likeable\Likeable;
class product extends Model
{
    use HasFactory,Likeable;
    protected $table = 'product';
    public $timestamps=false;

    public function likeUsers()
    {
        return $this->belongsToMany('App\User');
    }
}
