<?php

namespace App\Exports;

use App\Models\Employee;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeesExport implements FromCollection, FromQuery, WithChunkReading, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Employee::select('id', 'name', 'email', 'phone')->get();
    }

    public function query()
    {
        return Employee::query();
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

    public function chunkSize(): int
    {
        return 1000;
    }
}
