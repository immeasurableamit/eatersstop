<?php

namespace App\Imports;

use App\Models\Customers;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UploadCustomers implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customers([
            'full_name'     => $row[0],
            'mobile_no'    => $row[1],
            'location'    => $row[2],
        ]);
    }
}
