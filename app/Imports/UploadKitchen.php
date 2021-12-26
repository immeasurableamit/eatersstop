<?php

namespace App\Imports;

use App\Models\Kitchen;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UploadKitchen implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kitchen([
            'name'     => $row[0],
            'quantity'    => $row[1],
            'metric_unit' =>$row[2],
            'category'    => $row[3],
        ]);
    }
}
