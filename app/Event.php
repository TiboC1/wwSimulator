<?php

namespace App;

use App\User;
use App\Character;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $guarded = [];  

     public function randomDeathGen(){

        $user=Auth::user();

        $bravery = $user->character()->bravery;

        $dead = 1 + $bravery;

        $rng = mt_rand(0, 10000);

        if($dead > $rng){
            $outcome = 'dead';
        } else {
            $outcome = 'alive';
        };

        return $outcome;
     }
}
