<?php

namespace App\Exports;

use App\AdultClient;
use App\Childline;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LeadsExport implements FromView
{
    public function view(): View
    {
        return view('admin.export', [
            'adultLines' => AdultClient::get(),
            'childLines' => Childline::get(),
        ]);
    }
}
