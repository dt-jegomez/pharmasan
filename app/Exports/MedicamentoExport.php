<?php

namespace App\Exports;

use App\Medicamento;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MedicamentoExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            '#',
            'expedinete',
            'producto',
            'titular',
            'registro sanitario',
            'fecha expedicion',
            'fecha vencimiento',
            'estado registro',
            'expediente cum',
            'consecutivo cum',
            'cantidad cum',
            'descripcion comercial',
            'estado cum',
            'fecha activo',
            'fecha inactivo',
            'muestra medica',
            'unidad',
            'atc',
            'descripcion atc',
            'via administracion',
            'concentracion',
            'principio activo',
            'unidad medida',
            'cantidad',
            'unidadre ferencia',
            'forma farmaceutica',
            'nombre rol',
            'tipo rol',
            'modalidad'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        try {
            return Medicamento::get();
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
