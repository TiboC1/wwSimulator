<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $guarded = [];  

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function showHealth(){
        if ($this->physical_health > 80){
            $output = 'You feel great'; 
            
        } else if ($this->physical_health > 60){
            $output = 'You feel fine'; 

        } else if ($this->physical_health > 40){
            $output = 'You have some scratches and bruises'; 
            
        } else if ($this->physical_health > 20){
            $output = 'You are suffering'; 
            
        } else if ($this->physical_health > 5){
            $output = 'You are bleeding heavily and close to death'; 
            
        } else {
            $output = 'You are dead'; 
        }
        return $output;
    }
}
