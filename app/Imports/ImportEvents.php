<?php

namespace App\Imports;

use App\Event;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportEvents implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Event([
            'severity'      => $row['severity'], 
            'title'         => $row['title'],
            'description'   => $row['description'], 
            'choice1desc'   => $row['choice1desc'],
            'choice2desc'   => $row['choice2desc'], 
            'choice3desc'   => $row['choice3desc'],
            'choice4desc'   => $row['choice4desc'], 
            'choice1health' => $row['choice1health'],
            'choice2health' => $row['choice2health'], 
            'choice3health' => $row['choice3health'],
            'choice4health' => $row['choice4health'], 
            'choice1mental' => $row['choice1mental'],
            'choice2mental' => $row['choice2mental'], 
            'choice3mental' => $row['choice3mental'],
            'choice4mental' => $row['choice4mental'], 
            'choice1bravery'=> $row['choice1bravery'],
            'choice2bravery'=> $row['choice2bravery'], 
            'choice3bravery'=> $row['choice3bravery'],
            'choice4bravery'=> $row['choice4bravery'], 
        ]);
    }
}
