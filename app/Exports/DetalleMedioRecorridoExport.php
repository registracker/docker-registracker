<?php

namespace App\Exports;

use App\Models\DetalleMedioRecorrido;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DetalleMedioRecorridoExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return DetalleMedioRecorrido::all();
        return DetalleMedioRecorrido::join('medios_desplazamiento', 'detalle_medios_recorrido.id_medio_desplazamiento', '=', 'medios_desplazamiento.id')
        ->select('detalle_medios_recorrido.id', 'detalle_medios_recorrido.desplazamiento_id', 'medios_desplazamiento.nombre','detalle_medios_recorrido.duracion','detalle_medios_recorrido.fecha_creado')
        ->get();
    }

    public function headings(): array
    {
        return [
            '#',
            'Uuid',
            'Medio desplazamiento',
            'Duración',
            'Fecha creado',
        ];
    }
}

