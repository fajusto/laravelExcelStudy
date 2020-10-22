<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FirstSheetImport implements WithHeadingRow, ToModel
{
    public function model(array $row)
    {
        //dd($row['nome']);
        if(!is_null($row['nome'])){
            return new User([
                'name' => $row['nome'],
                'cpf' => $row['cpf'],
                'rg' => $row['rg'],
                'born_date' => $row['nascimento'],
                'work_place' => $row['local_de_trabalho'],
                'hire_start' => $row['inicio'],
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
                'hire_end' => $row['vigencia_contrato_aditivo']
            ]);
        }
    }
}