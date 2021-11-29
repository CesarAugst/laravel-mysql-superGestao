<?php

namespace App\Http\Controllers;

use App\SiteContato;
use App\MotivoContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:40'
        ];
        $feedback = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome precisa ter no Máximo 40 caracteres',
            'nome.unique' => 'O nme informado já está em uso',
            'email.email' => 'O email informado não é válido',
            'mensagem.max' => 'A mensagem deve ter no Máximo 2000 caracteres',

            'required' => 'O campo :attribute deve ser preenchido'
        ];
        $request->validate($regras,$feedback);
        
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
