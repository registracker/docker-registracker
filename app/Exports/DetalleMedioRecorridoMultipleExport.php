<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class DetalleMedioRecorridoMultipleExport implements FromCollection, WithHeadings
{
    protected $fechaInicio;
    protected $fechaFin;

    public function __construct(string $fechaInicio, string $fechaFin)
    {
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {   
        //return DetalleMedioRecorrido::all();
        //return DetalleMedioRecorrido::join('medios_desplazamiento', 'detalle_medios_recorrido.id_medio_desplazamiento', '=', 'medios_desplazamiento.id')
       // ->select('detalle_medios_recorrido.id', 'detalle_medios_recorrido.desplazamiento_id', 'medios_desplazamiento.nombre','detalle_medios_recorrido.duracion','detalle_medios_recorrido.fecha_creado')
        //->whereBetween('DATE(detalle_medios_recorrido.fecha_creado)',[$this->fechaInicio , $this->fechaFin])
        //->get();

        return DB::table('detalle_medios_recorrido  as mr')
            ->join('medios_desplazamiento', 'mr.id_medio_desplazamiento', '=', 'medios_desplazamiento.id')
            ->select('mr.id', 'mr.desplazamiento_id', 'medios_desplazamiento.nombre','mr.duracion','mr.costo','mr.fecha_creado')
            ->whereDate('mr.fecha_creado','>=',$this->fechaInicio)
            ->whereDate('mr.fecha_creado','<=',$this->fechaFin)
            ->get();
        }
        //->whereBetween('DATE(mr.fecha_creado)', [$this->fechaInicio, $this->fechaFin])

    public function headings(): array
    {
        return [
            '#',
            'Uuid',
            'Medio desplazamiento',
            'Duración',
            'costo',
            'Fecha creado',
        ];
    }
}

