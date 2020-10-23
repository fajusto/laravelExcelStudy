<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class UsersImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            new FirstSheetImport()
        ];
    }
}
