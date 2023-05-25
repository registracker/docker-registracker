<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class ReporteContadorAgrupadoExport implements FromArray, WithStrictNullComparison
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
        return $this;
    }

    public function array(): array
    {
        return $this->data;
    }

}
