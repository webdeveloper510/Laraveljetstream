<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = 'reports';
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\models\User','user_id');
    }


}
