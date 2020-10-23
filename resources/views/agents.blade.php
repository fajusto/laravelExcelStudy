<table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>RG</th>
                            <th>CPF</th>
                            <th>Nascimento</th>
                            <th>Local de Trabalho</th>
                            <th>Início</th>
                            <th>Vigência Contrato</th>
                            <th>Status</th>
                            <th>Telefone</th>
                            <th>Razão Social</th>
                            <th>Endereço</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>CEP</th>
                            <th>CNPJ</th>
                            <th>Status CNPJ</th>
                            <th>Rescisão</th>
                            <th>Nº CRECI</th>
                            <th>Venci. CRECI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->rg}}</td>
                                <td>{{$user->cpf}}</td>
                                <td>{{$user->born_date->format('d/m/Y')}}</td>
                                <td>{{$user->work_place}}</td>
                                <td>{{$user->hire_start->format('d/m/Y')}}</td>
                                <td>{{$user->hire_end->format('d/m/Y')}}</td>
                                <td>{{$user->hire_status}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->trading_name}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->bloc}}</td>
                                <td>{{$user->city}}</td>
                                <td>{{$user->postal_code}}</td>
                                <td>{{$user->cnpj}}</td>
                                <td>{{$user->status_cnpj}}</td>
                                <td>{{$user->rescission}}</td>
                                <td>{{$user->no_creci}}</td>
                                <td>{{$user->creci_exp}}</td>
                            </tr>
                        @endforeach
                    </tbody>
</table>