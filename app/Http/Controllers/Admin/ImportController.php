<?php

namespace App\Http\Controllers\Admin;

use App\Imports\LeadImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController
{
    public function create()
    {
        return view('admin.import.create');
    }

    public function store(Request $request)
    {
        Excel::import(new LeadImport, $request->file('leads'), null, \Maatwebsite\Excel\Excel::CSV);

        return redirect()->back()->with('success', 'Leads Imported Successfully.');
    }
}
