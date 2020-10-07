<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ChildlineExport;
use App\Exports\LifelineExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index($resource='lifeline')
    {
        if($resource == 'lifeline')
            return (new LifelineExport)->download('lifeline.csv');
        else
            return (new ChildlineExport)->download('childline.csv');
    }

}
