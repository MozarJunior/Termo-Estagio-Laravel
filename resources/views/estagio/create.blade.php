@extends('layout.main')

@section('title', 'Coleta de Dados')
@section('css')
    {{ url('assets\css\user.css') }}
@endsection
@section('content')

    <div class="container">
        <form class="form col-md-6 col-sm-8 col-xs-12" action="{{ route('estagiario.dadosEstagio.store', 1) }}" method="post">
            @csrf
            <h1 style="text-align: center;">Dados para o estágio</h1>
            <input type="hidden" name="estudante_id" value="0">
            <div class="form-row">
                <div class="col-md-6 mb-4">
                    <label for="dados01">Curso</label>
                    <select name="curso_id" class="form-control" id="dados01">
                        <option value="0">Selecione o Curso</option>
                        @foreach ($cursos as $curso)
                            <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-4">
                    <label for="dados02">Orientador</label>
                    <select name="orientador_id" class="form-control" id="dados02">
                        <option value="0">Selecione o Orientador</option>
                        @foreach ($orientadores as $orientador)
                            <option value="{{ $orientador->id }}">{{ $orientador->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-4">
                    <label for="dados03">Periodo do Curso</label>
                    <input class="form-control" type="text" name="periodo_curso" id="dados03">
                </div>
            </div>

            <div class="form-row">

                <div class="col-md-12 mb-4">
                    <label for="dados04"></label>
                    <select name="concedente_id" id="dados04" class="form-control">
                        <option value="0">Selecione a Concedente</option>
                        @foreach ($concedentes as $concedente)
                            <option value="{{ $concedente->id }}">{{ $concedente->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-4">
                    <label for="dados05">Supervisor</label>
                    <input class="form-control" type="text" name="nome" id="dados05">
                </div>
                <div class="col-md-6 mb-4">
                    <label for="dados06">Cargo do Supervisor</label>
                    <input class="form-control" type="text" name="cargo" id="dados06">
                </div>
                <div class="col-md-6 mb-4">
                    <label for="dados07">E-Mail do Supervisor</label>
                    <input class="form-control" type="text" name="email" id="dados07">
                </div>
                <div class="col-md-6 mb-4">
                    <label for="dados08">Telefone do Supervisor</label>
                    <input class="form-control" type="text" name="telefone" id="dados08">
                </div>

                <div class="col-md-6 mb-4">
                    <label for="dados09">Data de Inicio</label>
                    <input class="form-control" type="date" name="data_inicio" id="dados09">
                    <input type="hidden" name="data_fim" value="0000-00-00">
                </div>

                <div class="col-md-6 mb-4">
                    <label for="dados10">Carga Horaria</label>
                    <input class="form-control" type="text" name="duracao" id="dados10">
                </div>

                <div class="col-md-6 mb-4">
                    <label for="dados11">Hora de Entrada</label>
                    <input class="form-control" type="time" name="hora_entrada" id="dados11">
                </div>

                <div class="col-md-6 mb-4">
                    <label for="dados12">Hora de Saida</label>
                    <input class="form-control" type="time" name="hora_saida" id="dados12">
                </div>

            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>

@endsection