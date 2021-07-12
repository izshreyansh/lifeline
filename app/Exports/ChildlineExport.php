<?php

namespace App\Exports;

use App\ChildLine;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ChildlineExport implements FromQuery, WithHeadings
{
    use Exportable;

    public $category;

    public function __construct(String $category)
    {
        $this->category = $category;
    }

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
            'Category',
            'status',
            'time',
            'Referred To',
            'When'
        ];
    }

    public function query()
    {
        return ChildLine::query()
            ->where('category', $this->category)
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
                'category',
                'status',
                'time',
                'referred_to',
                'created_at'
            ]);
    }
}
