<?php

namespace App\Exports;

use App\Models\Levantamiento;
use App\Models\Marcador;
use App\Models\ReporteMarcadores;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ReporteMarcadoresExport implements FromCollection, WithHeadings, WithMapping
{
    private $levantamiento;

    public function __construct(Levantamiento $levantamiento)
    {
        $this->levantamiento = $levantamiento;
        return $this;
    }

    public function collection()
    {
        return ReporteMarcadores::with('marcador')
            ->select(
                'id_marcador',
                DB::raw('ST_AsText(posicion) AS latlng'),
                'altitud',
                'comentario',
                'fecha_reporte',
            )
            ->where('id_levantamiento', $this->levantamiento->id)
            ->orderBy('fecha_reporte', 'asc')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Marcador',
            'LatLng',
            'Altitud',
            'Comenario',
            'Registrado',
        ];
    }

    public function map($reporte): array
    {
        return [
            $reporte->marcador->nombre,
            $reporte->latlng,
            $reporte->altitud,
            $reporte->comentario,
            $reporte->fecha_reporte,
        ];
    }
}
