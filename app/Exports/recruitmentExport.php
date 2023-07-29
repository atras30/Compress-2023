<?php

namespace App\Exports;

use App\Models\Form;
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
        return Form::all();
    }

    public function startCell(): string
    {
        return 'B2';
    }

    public function headings(): array
        {
            return [
                'id',
                'namalengkap',
                'universitas',
                'nim',
                'email',
                'medsos',
                'bukti',
                'instagram',
                'linkkaryaig',
                'pathfilehasilkarya',
                'type'  
            ];
        }
}
