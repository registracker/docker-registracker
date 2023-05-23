<?php

namespace App\Exports;

use App\Models\ReporteContador;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReporteContadorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ReporteContador::all();
    }
}
