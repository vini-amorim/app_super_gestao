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
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required|min:3|max:10',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:400'
        ]);

        
        //SiteContato::create($request->all());
    }
}
