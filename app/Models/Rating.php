<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Rating extends Model
{
    use HasFactory;
    use Rateable;
    protected $table = 'ratings';
    protected $guarded = [];

    protected $fillable = [
        'comment'
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }


}
