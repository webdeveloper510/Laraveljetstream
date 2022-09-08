<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;
    protected $table = 'subscribes';
    public $timestamps = true;


    public function user()
    {
        return $this->belongsTo('App\User');
    }
   
}
