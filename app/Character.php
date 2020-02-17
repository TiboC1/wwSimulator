<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $guarded = [];  

    protected $casts = [
        'shifts' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
