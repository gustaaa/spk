<?php

namespace App\Exports;

use App\Models\alternatif;
use Maatwebsite\Excel\Concerns\FromCollection;

class AlternatifExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return alternatif::Select(
            'id',
            'nama',
            'C1',
            'C2',
            'C3',
            'C4',
            'C5',
            'C6',
            'C7',
            'C8',
            'C9',
            'C10',
            'C11',
            'C12',
        )->get();
    }
    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'C1',
            'C2',
            'C3',
            'C4',
            'C5',
            'C6',
            'C7',
            'C8',
            'C9',
            'C10',
            'C11',
            'C12',
        ];
    }
}
