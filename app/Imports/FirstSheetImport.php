<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class FirstSheetImport implements WithHeadingRow, WithCalculatedFormulas, ToModel
{
    public function model(array $row)
    {
        if(!is_null($row['nome'])){
            return new User([
                'name' => $row['nome'],
                'cpf' => $row['cpf'],
                'rg' => $row['rg'],
                'born_date' => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date:: excelToDateTimeObject($row['nascimento'])),
                'work_place' => $row['local_de_trabalho'],
                'hire_start' => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date:: excelToDateTimeObject($row['inicio'])),
                'hire_status' => $row['situacao'],
                'phone' => $row['telefone'],
                'address' => $row['endereco'],
                'bloc' => $row['bairro'],
                'city' => $row['cidade'],
                'postal_code' => $row['cep'],
                'cnpj' => $row['cnpj'],
                'status_cnpj' => $row['status_cnpj'],
                'rescission' => $row['rescisao'],
                'no_creci' => $row['no_creci'],
                'creci_exp' => $row['venc_creci'],
                'hire_end' => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date:: excelToDateTimeObject($row['vigencia_contrato_aditivo']))
                ]);
        }
    }
}