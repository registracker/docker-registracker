<?php

namespace App\Exports;

use App\Models\Levantamiento;
use App\Models\Marcador;
use App\Models\ReporteIncidente;
use App\Models\ReporteMarcadores;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ReporteIncidentesExport implements FromCollection, WithHeadings, WithMapping
{
    private $dates;

    public function __construct(array $dates)
    {
        $this->dates = $dates;
        return $this;
    }

    public function collection()
    {
        return ReporteIncidente::with('incidente')
            ->select(
                'id_incidente',
                DB::raw('ST_AsText(posicion) AS latlng'),
                'altitud',
                'fecha_reporte',
            )
            ->whereBetween('fecha_reporte', $this->dates)
            ->orderBy('fecha_reporte', 'asc')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Incidente',
            'LatLng',
            'Altitud',
            'Registrado',
        ];
    }

    public function map($reporte): array
    {
        return [
            $reporte->incidente->nombre,
            $reporte->latlng,
            $reporte->altitud,
            $reporte->fecha_reporte,
        ];
    }
}
