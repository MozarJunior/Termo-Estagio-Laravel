@extends('layout.main')

@section('title', 'Listagem de Dados')

@section ('css')
    {{url('assets\css\user.css')}}
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Dados Pessoais</h5>
                    <div class="card-body">
                        <p class="card-text"><b>Nome:</b> {{ $pessoa->nome }}</p>
                        <p class="card-text"><b>CPF:</b> {{ $pessoa->cpf }}</p>
                        <p class="card-text"><b>RG:</b> {{ $pessoa->rg }}</p>
                        <p class="card-text"><b>Orgão Expedidor:</b> {{ $pessoa->orgao_expedidor }}</p>
                        <p class="card-text"><b>Telefone:</b> {{ $pessoa->telefone }}</p>
                        <p class="card-text"><b>E-Mail:</b> {{ $pessoa->email }}</p>
                        <p class="card-text"><b>Criado em:</b> {{ date('d/m/Y', strtotime($pessoa->created_at)) }}</p>
                    </div>

                    <a href="{{ route('estagiario.dadosPessoais.edit', $pessoa->id) }}" class="btn btn-primary">Atualizar Dados</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Endereço</h5>
                    <div class="card-body">
                        <p class="card-text"><b>Logradouro:</b> {{ $endereco->logradouro }}</p>
                        <p class="card-text"><b>Bairro:</b> {{ $endereco->bairro }}</p>
                        <p class="card-text"><b>Número:</b> {{ $endereco->numero }}</p>
                        <p class="card-text"><b>CEP:</b> {{ $endereco->cep }}</p>
                        <p class="card-text"><b>Cidade:</b> {{ $endereco->cidade }}</p>
                        <p class="card-text"><b>Estado/UF:</b> {{ $endereco->uf }}</p>
                        <p class="card-text"><b>Criado em:</b> {{ date('d/m/Y', strtotime($endereco->created_at)) }}</p>
                    </div>
                    <a href="{{ route('estagiario.dadosPessoais.edit', $pessoa->id) }}" class="btn btn-primary">Atualizar Dados</a>
                </div>
            </div>
            
        </div>
    </div>

@endsection