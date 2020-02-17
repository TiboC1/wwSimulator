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

    public function showPhysicalHealth(){
        if ($this->physical_health > 80){
            $output = 'You are healthy'; 

        } else if ($this->physical_health > 60){
            $output = 'You have a few scratches and bruises'; 

        } else if ($this->physical_health > 40){
            $output = 'You have some deep cuts and have lost some weight'; 
            
        } else if ($this->physical_health > 20){
            $output = 'You are suffering from trenchfoot and are very skinny'; 
            
        } else if ($this->physical_health > 5){
            $output = 'You are bleeding heavily and close to death'; 
            
        } else {
            $output = 'You are dead'; 
        }
        return $output;
    }

    public function showMentalHealth(){
        if ($this->mental_health > 80){
            $output = 'You feel great'; 
            
        } else if ($this->mental_health > 60){
            $output = 'You feel fine'; 

        } else if ($this->mental_health > 40){
            $output = 'You are experiencing mild anxiety'; 
            
        } else if ($this->mental_health > 20){
            $output = 'You are suffering'; 
            
        } else if ($this->mental_health > 5){
            $output = 'You are deeply depressed and close to breaking'; 
            
        } else {
            $output = 'You are dead'; 
        }
        return $output;
    }

    public function showBravery(){
        if ($this->bravery > 80){
            $output = 'You feel great'; 
            
        } else if ($this->bravery > 60){
            $output = 'You feel fine'; 

        } else if ($this->bravery > 40){
            $output = 'You have some scratches and bruises'; 
            
        } else if ($this->bravery > 20){
            $output = 'You are suffering'; 
            
        } else if ($this->bravery > 5){
            $output = 'You are bleeding heavily and close to death'; 
            
        } else {
            $output = 'You are dead'; 
        }
        return $output;
    }
}
