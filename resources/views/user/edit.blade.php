@extends('layout.main')

@section('title', 'Atualização de Dados')
@section('css')
    {{ url('assets\css\user.css') }}
@endsection
@section('content')
    <div class="container">
        <form class="form col-md-6 col-sm-8 col-xs-12" action="{{ route('estagiario.dadosPessoais.update', $pessoa->id) }}"
            method="post">
            @method('PUT')
            @csrf
            <h1 style="text-align: center;">Atualização dos dados</h1>
            <div class="form-row">
                <div class="col-md-12 mb-4">
                    <label for="dados01">Nome</label>
                    <input type="text" class="form-control" name="nome" id="dados01" placeholder="Nome"
                        value="{{ $pessoa->nome }}" required>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="dados02">CPF</label>
                    <input type="text" class="form-control" name="cpf" data-mask="000.000.000-00" id="dados02"
                        placeholder="CPF" value="{{ $pessoa->cpf }}" required>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="dadosUsername">RG</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="rg" id="dadosUsername" placeholder="RG"
                            value="{{ $pessoa->rg }}" aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="dados03">Orgão Expedidor</label>
                    <input type="text" class="form-control" name="orgao_expedidor" id="dados03"
                        placeholder="Orgão Expedidor" value="{{ $pessoa->orgao_expedidor }}" required>
                </div>
                <div>
                    <input type="hidden" name="data_nascimento" value="19/12/2003">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="dados04">Data de Nascimento</label>
                    <input type="date" class="form-control" name="data_nascimento" id="dados04"
                        value="{{ $pessoa->data_nascimento }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="dados05">E-mail</label>
                    <input type="email" class="form-control" name="email" id="dados05" placeholder="E-mail"
                        value="{{ $pessoa->email }}" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="dados06">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" id="dados06" placeholder="Telefone"
                        value="{{ $pessoa->telefone }}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12 mb-4">
                    <label for="dados01">Logradouro/Rua</label>
                    <input type="text" class="form-control" name="logradouro" id="dados01" placeholder="Logradouro/Rua"
                        value="{{ $endereco->logradouro }}" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="dados02">Número</label>
                    <input type="text" class="form-control" name="numero" id="dados02" placeholder="Número"
                        value="{{ $endereco->numero }}" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="dadosUsername">Bairro</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="bairro" id="dadosUsername" placeholder="Bairro"
                            aria-describedby="inputGroupPrepend" value="{{ $endereco->bairro }}" required>
                    </div>
                </div>
                <div class="form-row">

                    <div class="col-md-4 mb-4">
                        <label for="dados05">Cep</label>
                        <input type="text" class="form-control" name="cep" data-mask="00.000-000"
                            data-mask-selectonfocus="true" id="dados05" placeholder="CEP"
                            value="{{ $endereco->cep }}" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="dados03">Cidade</label>
                        <input type="text" class="form-control" name="cidade" id="dados03" placeholder="Cidade"
                            value="{{ $endereco->cidade }}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="dados04">Estado</label>
                        <input type="text" class="form-control" name="uf" id="dados04" placeholder="UF"
                            value="{{ $endereco->uf }}" required>
                    </div>
                </div>

                <input class="btn btn-primary" type="submit" value="Enviar">
                @if (session('session'))
                    <h1>{{ session('session') }}</h1>
                @endif

                @if ($errors->first('error'))
                    <h1>Insira novamente</h1>
                @endif
        </form>
    </div>
@endsection
