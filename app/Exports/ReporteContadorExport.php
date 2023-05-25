<?php

namespace App\Exports;

use App\Models\LevantamientoContador;
use App\Models\ReporteContador;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ReporteContadorExport implements FromCollection, WithHeadings, WithMapping
{
    private $levantamientoContador;

    public function __construct(LevantamientoContador $levantamientoContador)
    {
        $this->levantamientoContador = $levantamientoContador;
        return $this;
    }

    public function collection()
    {
        return ReporteContador::with('vehiculo')
            ->select(
                'id_vehiculo',
                'registrado',
            )
            ->where('id_levantamiento_contador', $this->levantamientoContador->id)
            ->orderBy('id_vehiculo', 'asc')
            ->orderBy('registrado', 'asc')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Vehiculo',
            'Fecha registro',
        ];
    }

    public function map($reporte): array
    {
        return [
            $reporte->vehiculo->nombre,
            $reporte->registrado,
        ];
    }
}
