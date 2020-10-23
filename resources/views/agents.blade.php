<table class="table" style="max-width:100%; white-space:nowrap;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">RG</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Nascimento</th>
                            <th scope="col">Local de Trabalho</th>
                            <th scope="col">Início</th>
                            <th scope="col">Vigencia Contrato</th>
                            <th scope="col">Status</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Razão Social</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">CEP</th>
                            <th scope="col">CNPJ</th>
                            <th scope="col">Status CNPJ</th>
                            <th scope="col">Rescisão</th>
                            <th scope="col">Nº CRECI</th>
                            <th scope="col">Venci. CRECI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
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