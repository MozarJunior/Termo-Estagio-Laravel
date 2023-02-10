@extends('layout.main')
@section('title', 'Meus dados')
@section('content')
<div>
    <h2 style="text-align: center;">
        Bem Vindo<br>
    </h2>
</div>

<div style="text-align: center; margin: 20px;">
    <h3>Coleta de dados</h3>
    <div>
        <a href="{{ route('estagiario.dadosPessoais.create') }}" class="btn btn-primary">Dados Pessoais</a>
        <a href="{{ route('estagiario.dadosPessoais.edit', 1) }}" class="btn btn-primary">Atualizar dados Pessoais</a>
        <a href="{{ route('estagiario.dadosEstagio.create') }}" class="btn btn-primary">Dados do Estágio</a>
        <a href="{{ route('estagiario.dadosEstagio.edit', 1) }}" class="btn btn-primary">Atualizar dados do estagio</a>
    </div>
</div>
<div style="text-align: center; margin: 20px;">
    <h3>Meus Dados</h3>
    <div>
        <a href="{{ route('estagiario.show', 1) }}" style="margin: 5px;" class="btn btn-primary">Meus Dados</a><br>
        <a href="Pdf.php" class="btn btn-primary">Gerar Termo de Estágio</a>
    </div>
</div>
@endsection