<?php

namespace App\Imports;

use App\Event;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportEvents implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Event([
            'id'            => $row[0],
            'severity'      => $row[1], 
            'title'         => $row[0],
            'description'   => $row[1], 
            'choice1desc'   => $row[0],
            'choice2desc'   => $row[1], 
            'choice3desc'   => $row[0],
            'choice4desc'   => $row[1], 
            'choice1health' => $row[0],
            'choice2health' => $row[1], 
            'choice3health' => $row[0],
            'choice4health' => $row[1], 
            'choice1mental' => $row[0],
            'choice2mental' => $row[1], 
            'choice3mental' => $row[0],
            'choice4mental' => $row[1], 
            'choice1bravery'=> $row[0],
            'choice2bravery'=> $row[1], 
            'choice3bravery'=> $row[0],
            'choice4bravery'=> $row[1], 
        ]);
    }
}
