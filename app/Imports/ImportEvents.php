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
            'title'         => $row[2],
            'description'   => $row[3], 
            'choice1desc'   => $row[4] ?? $row[4],
            'choice2desc'   => $row[5] ?? $row[5], 
            'choice3desc'   => $row[6] ?? $row[6],
            'choice4desc'   => $row[7] ?? $row[7], 
            'choice1health' => $row[8] ?? $row[8],
            'choice2health' => $row[9] ?? $row[9], 
            'choice3health' => $row[10] ?? $row[10],
            'choice4health' => $row[11] ?? $row[11], 
            'choice1mental' => $row[12] ?? $row[12],
            'choice2mental' => $row[13] ?? $row[13], 
            'choice3mental' => $row[14] ?? $row[14],
            'choice4mental' => $row[15] ?? $row[15], 
            'choice1bravery'=> $row[16] ?? $row[16],
            'choice2bravery'=> $row[17] ?? $row[17], 
            'choice3bravery'=> $row[18] ?? $row[18],
            'choice4bravery'=> $row[19] ?? $row[19], 
        ]);
    }
}
