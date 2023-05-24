<?php

namespace App\Exports;

use App\Models\ReporteContador;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReporteContadorExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ReporteContador::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'User',
            'Date',
        ];
    }
}
