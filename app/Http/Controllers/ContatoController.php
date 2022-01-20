<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contatos = MotivoContato::all();

    //     dd($request);

    //     echo $request->input('name');
    // 
    
    // $contato = new SiteContato();
    // $contato->nome =  $request->input('nome');
    // $contato->telefone =  $request->input('telefone');
    // $contato->email =  $request->input('email');
    // $contato->motivo_contato  = $request->input('motivo_contato');
    // $contato->mensagem =  $request->input('mensagem');
    
    // // print_r($contato->getAttributes());
    // $contato->save();

    // $contato = new SiteContato();
    // $contato->fill($request->all());
    // $contato->save();
    return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
}

    public function salvar(request $request) {
        //validação do form -->
        $request->validate(
        [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required|min:3|max:10',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:400'
        ],
        [
            'nome.required' => 'O Campo Nome precisa ser preenchido',
            'nome.min' => 'O Nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O Nome precisa ter máximo 10 caracteres',
            'telefone.required' => 'O campo Telefone precisa ser preenchido',
            'telefone.min' => 'O campo Telefone precisa ter no mínimo 3 caracteres',
            'telefone.max' => 'O campo Telefone precisa ter no máximo 10 caracteres',
            'email.email' => 'Insira um E-mail válido',
            'motivo_contatos_id.required' => 'O campo Motivo do Contato precisa ser preenchido',
            'mensagem.required' => 'O campo Mensagem precisa ser preenchido',
            'mensagem.min' => 'O campo Mensagem precisa ter no máximo 400 caracteres'
        ]
    );
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
