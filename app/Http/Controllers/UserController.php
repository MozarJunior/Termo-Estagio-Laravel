<?php

namespace App\Http\Controllers;
use App\Models\{
    Pessoa,
    Endereco,
    Estudante,
};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request, $id)
    {
        
        $data_endereco = $request->only([
            'logradouro', 'numero', 'bairro', 'cep', 'cidade', 'uf'
        ]);
        try{
            $endereco = Endereco::create($data_endereco);
            $data_pessoa = $request->only([
                'nome', 'cpf', 'rg', 'orgao_expedidor', 'data_nascimento', 'email', 'telefone', 'endereco_id'
            ]);
            $data_pessoa['endereco_id'] = $endereco->id;

            $pessoa = Pessoa::create($data_pessoa);
            
            $estudante = Estudante::find($id);
            $estudante->pessoa_id = $pessoa->id;
            $estudante->update();

            return back()->with('session', 'Dados gravados com sucesso');
        }catch(\Exception $exception){
            return redirect()->back()->withErrors(['error' => 'Preencha todos os campos']);
        }
    }

    public function edit($id)
    {
        $estudante = Estudante::find($id);
        $pessoa = Pessoa::find($estudante->pessoa_id);
        $endereco = Endereco::find($pessoa->endereco_id);
        return view('user.edit', compact('pessoa', 'endereco', 'id'));
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::find($id);
        $endereco = Endereco::find($pessoa->endereco_id);

        $data_endereco = $request->only([
            'logradouro', 'numero', 'bairro', 'cep', 'cidade', 'uf'
        ]);
        try{
            $endereco->update($data_endereco);

            $data_pessoa = $request->only([
                'nome', 'cpf', 'rg', 'orgao_expedidor', 'data_nascimento', 'email', 'telefone'
            ]);

            $pessoa->update($data_pessoa);

            return back()->with('session', 'Dados Atualizados com sucesso');
        }catch(\Exception $exception){
            return redirect()->back()->withErrors(['error' => 'Preencha todos os campos']);
        }
    }

    public function show($id)
    {
        $estudante = Estudante::find($id);
        $pessoa = Pessoa::find($estudante->pessoa_id);
        $id_endereco = $pessoa->endereco_id;
        $endereco = Endereco::find($id_endereco);
        return view('user.show',compact('pessoa', 'endereco'));
    }
}
