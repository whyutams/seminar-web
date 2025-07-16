<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Carbon\Carbon;

class RegistrationsExport implements FromCollection, WithHeadings, WithMapping, WithColumnFormatting
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Registration::all();
    }

    public function headings(): array
    {
        return [
            'Full Name',
            'Department',
            'Institution',
            'Country',
            'Email',
            'Phone',
            'Registered At',
        ];
    }

    public function map($reg): array
    {
        return [
            $reg->full_name,
            $reg->department,
            $reg->institution,
            $reg->country,
            $reg->email,
            $reg->phone,
            Carbon::parse($reg->created_at)->format('d-m-Y'),  
        ];
    }

    public function columnFormats(): array
    {
        return [
            'G' => NumberFormat::FORMAT_TEXT,  
        ];
    }
}
