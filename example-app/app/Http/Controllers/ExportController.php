<?php

namespace App\Http\Controllers;

use App\Exports\ShopsExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export()
    {
        return Excel::download(new ShopsExport, 'shop.xlsx');
    }
}

