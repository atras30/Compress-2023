<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class recruitmentExport implements FromCollection, WithCustomStartCell, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Registration::all();
    }

    public function startCell(): string
    {
        return 'B2';
    }

    public function headings(): array
        {
            return [
            'id',
            'fullname',
            'nickname',
            'nim',
            'angkatan',
            'prodi',
            'tanggallahir',
            'email',
            'noHp',
            'idLine',
            'instagram',
            'divisi1',
            'alasandiv1',
            'divisi2',
            'alasandiv2',
            'pengalaman',
            'kesibukan',
            'alasan-masuk-commpress',
            'portofolio'  
            ];
        }
}
