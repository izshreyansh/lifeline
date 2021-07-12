<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ChildlineExport;
use App\Exports\LifelineExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function preflight()
    {
        return view('admin.reports.preflight');
    }

    public function index(Request $request)
    {
        $request->validate([
            'resource' => 'required',
            'category' => 'required'
        ]);

        if($request->input('resource') == 'lifeline')
            return (new LifelineExport($request->category))->download('lifeline.csv');
        else
            return (new ChildlineExport($request->category))->download('childline.csv');
    }
}
