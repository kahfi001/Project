<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function import()
    {
        Excel::import(new UsersImport, request()->file('file'));

        return back();
    }
    public function export()
    {
        return Excel::download(new UsersExport, 'user.xlsx');
    }
}
