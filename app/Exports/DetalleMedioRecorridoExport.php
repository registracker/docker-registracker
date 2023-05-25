<?php

namespace App\Exports;

use App\Models\CoordenadaDesplazamiento;
use App\Models\Desplazamiento;
use App\Models\DetalleMedioRecorrido;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\DB;

class DetalleMedioRecorridoExport implements FromCollection, WithHeadings, WithMapping
{
    private $desplazamiento;

    public function __construct(Desplazamiento $desplazamiento)
    {
        $this->desplazamiento = $desplazamiento;
        return $this;
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

        // return DB::table('detalle_medios_recorrido  as mr')
        //     ->join('medios_desplazamiento', 'mr.id_medio_desplazamiento', '=', 'medios_desplazamiento.id')
        //     ->select('mr.id', 'mr.desplazamiento_id', 'medios_desplazamiento.nombre','mr.duracion','mr.fecha_creado')
        //     ->whereDate('mr.fecha_creado','>=',$this->fechaInicio)
        //     ->whereDate('mr.fecha_creado','<=',$this->fechaFin)
        //     ->get();
        // }


        //->whereBetween('DATE(mr.fecha_creado)', [$this->fechaInicio, $this->fechaFin]
        // dd( $this->desplazamiento);
        // dd($this->desplazamiento->id);
        return CoordenadaDesplazamiento::with('medio')
            ->select(
                'id',
                DB::raw('ST_AsText(posicion) AS latlng'),
                'altitud',
                'velocidad',
                'fecha_registro',
                '*'
            )
            ->where('desplazamiento_id', $this->desplazamiento->id)
            ->orderBy('fecha_registro', 'asc')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Medio desplazamiento',
            'LatLng',
            'Altitud',
            'Velocidad',
            'Fecha registro',
        ];
    }

    public function map($reporte): array
    {
        return [
            $reporte->medio->nombre,
            $reporte->latlng,
            $reporte->altitud,
            $reporte->velocidad,
            $reporte->fecha_registro,
        ];
    }
}

