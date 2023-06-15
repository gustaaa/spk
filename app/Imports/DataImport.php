<?php

namespace App\Imports;

use App\Models\alternatif;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new alternatif([
            'nama' => $row[0],
            'C1' => $row[1],
            'C2' => $row[2],
            'C3' => $row[3],
            'C4' => $row[4],
            'C5' => $row[5],
            'C6' => $row[6],
            'C7' => $row[7],
            'C8' => $row[8],
            'C9' => $row[9],
            'C10' => $row[10],
            'C11' => $row[11],
            'C12' => $row[12],
        ]);
    }
}