<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;
    protected $table = 'subscribes';

    public function subscribes()
    {
        return $this->hasMany('App\Subscribe', 'channel_id', 'count', 'id', 'user_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
