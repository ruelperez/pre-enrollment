<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\YourModel;

class MyExcelImport implements ToModel
{
    public function model(array $row)
    {
        return new usn_lists([
            'id' => $row[0],
            'fname' => $row[1],
            'lname' => $row[2],
            // Map the Excel columns to your model attributes
        ]);
    }
}
