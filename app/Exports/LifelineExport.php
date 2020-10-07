<?php

namespace App\Exports;

use App\AdultClient;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LifelineExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Phone',
            'Telephone',
            'Province',
            'District',
            'Gender',
            'Age',
            'Referred from',
            'status',
            'time',
            'Referred To',
            'When'
        ];
    }

    public function query()
    {
        return AdultClient::query()
            ->select([
                'first_name',
                'last_name',
                'phone',
                'telephone',
                'province',
                'district',
                'gender',
                'age',
                'medium',
                'status',
                'time',
                'referred_to',
                'created_at'
            ]);
    }
}
