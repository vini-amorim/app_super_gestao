@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h1>Fornecedores - Lista</h1>
        </div>  

        <div class="menu">
            <ul>
              <li><a href="{{ route('app.fornecedor.adicionar')}}">Novo</a></li>
              </li><a href="{{ route('app.fornecedor')}}">Consulta</a></li>

            </li>
        </div>

        <div class="informacao-pagina">
          <div style="width:30%; margin-left:auto; margin-right:auto">
            ...Lista...
          </div>
        
        </div>
    </div>

@endsection