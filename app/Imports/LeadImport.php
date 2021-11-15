<?php

namespace App\Imports;

use App\AdultClient;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LeadImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new AdultClient([
            'created_at'     => $row['date'] ?? null,
            'time' => $row['time_of_call'] ?? null,
            'category' => $row['case_category'] ?? 'n\a',
            'gender' => $row['gender'] ?? null,
            'age' => $row['age'] ?? null,
            'district' => $row['district'] ?? null,
            'follow_up_phone' => $row['contact_number'] ?? null,
            'incident_description' => $row['short_description_of_case'] ?? null,
            'status' => $row['case_status'] ?? null,
            'counselling_notes' => $row['comment'] ?? null,
        ]);
    }
}
