<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromView, ShouldAutoSize, WithStyles
{

    public function styles(Worksheet $sheet)
    {
        return [
            1    => [
                'font' => ['bold' => true],
            ],
        ];
    }

    public function view(): View
    {
        return view('agents', [
            'users' => User::all()
        ]);
    }
}
