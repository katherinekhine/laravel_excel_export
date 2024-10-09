<?php

namespace App\Http\Controllers;

use App\Exports\EmployeesExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    public function export_excel()
    {
        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }
}
