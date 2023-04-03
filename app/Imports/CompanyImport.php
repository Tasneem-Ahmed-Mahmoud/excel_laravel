<?php

namespace App\Imports;

use App\Models\Company;
use Maatwebsite\Excel\Concerns\ToModel;

class CompanyImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
     {
            $data = [
                'company' => $row[0],
                'phone' => $row[1],
                'recordNumber' => $row[2],
                'name' => $row[3],
            ];
            Company::create($data);





//    return new Company ([
//         'company' => $row[0],
//         'phone' => $row[1],
//         'recordNumber' => $row[2],
//         'name' => $row[3],
//     ]);
   
//         }

    }

