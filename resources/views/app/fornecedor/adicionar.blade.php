
@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h1>Fornecedores - Adicionar</h1>
        </div>  

        <div class="menu">
            <ul>
              <li><a href="{{ route('app.fornecedor.adicionar')}}">Novo</a></li>
              </li><a href="{{ route('app.fornecedor')}}">Consulta</a></li>

            </li>
        </div>

        <div class="informacao-pagina">
          <div style="width:30%; margin-left:auto; margin-right:auto">
            <form method="post" action="">
              <input type="text" name="nome" placeholder="Nome" class="borda-preta">
              <input type="text" name="site" placeholder="Site" class="borda-preta">
              <input type="text" name="uf" placeholder="UF" class="borda-preta">
              <input type="text" name="email" placeholder="E-mail" class="borda-preta">
              <button type="submit">Cadastrar</button>
            </form>
          </div>
        
        </div>
    </div>

@endsection