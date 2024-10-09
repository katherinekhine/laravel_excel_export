<?php

namespace App\Exports;

use App\Models\Employee;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeesExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Employee::select('id', 'name', 'email', 'phone')->get();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Name',
            'Email',
            'Phone',
        ];
    }
}
