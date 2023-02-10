<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Pessoa,
    Endereco,
    Curso,
    Concedente,
    Supervisor,
    Estagio,
    Estudante,
};
use Illuminate\Support\Facades\DB;

class EstagioController extends Controller
{
    public function create()
    {
        $cursos = Curso::all();
        $orientadores = DB::table('pessoas')
            ->join('orientadores', 'pessoas.id', '=', 'orientadores.pessoa_id')
            ->get();
        $concedentes = Concedente::all();
        return view('estagio.create', compact('cursos', 'orientadores', 'concedentes'));
    }

    public function store(Request $request, $id)
    {
        $estudante = Estudante::find($id);

        $data_supervisor = $request->only([
            'nome', 'cargo', 'email', 'telefone', 'concedente_id'
        ]);

        // $supervisor = Supervisor::create($data_supervisor);
        
        // $estudante->supervisor_id = $supervisor->id;
        $estudante->curso_id = $request->curso_id;
        $estudante->periodo_curso = $request->periodo_curso;
        $estudante->orientador_id = $request->orientador_id;
        $estudante->update();

        $data_estagio = $request->only([
            'data_inicio', 'data_fim', 'duracao', 'hora_entrada', 'hora_saida', 'concedente_id', 'estudante_id' 
        ]);
        $data_estagio['estudante_id'] = $estudante->id;

        $estagio = Estagio::create($data_estagio);

        return back()->with('session', 'Dados de estagio cadastrados');
    }

    public function edit($id)
    {
        $cursos = Curso::all();
        $orientadores = DB::table('pessoas')
            ->join('orientadores', 'pessoas.id', '=', 'orientadores.pessoa_id')
            ->get();
        $concedentes = Concedente::all();
        $estagio = Estagio::where('estudante_id', $id)->first();
        $estudante = Estudante::find($id);
        return view('estagio.edit', compact('estudante', 'cursos', 'orientadores', 'concedentes', 'estagio'));
    }

    public function update(Request $request, $id)
    {
        $estudante = Estudante::find($id);
        $estagio = Estagio::where('estudante_id', $id)->first();

        $data_supervisor = $request->only([
            'nome', 'cargo', 'email', 'telefone', 'concedente_id'
        ]);

        $estudante->curso_id = $request->curso_id;
        $estudante->periodo_curso = $request->periodo_curso;
        $estudante->orientador_id = $request->orientador_id;
        $estudante->update();

        $data_estagio = $request->only([
            'data_inicio', 'data_fim', 'duracao', 'hora_entrada', 'hora_saida', 'concedente_id', 'estudante_id' 
        ]);
        $data_estagio['estudante_id'] = $estudante->id;

        $estagio->update($data_estagio);

        return back()->with('session', 'Dados de estagio atualizados');
    }
}
