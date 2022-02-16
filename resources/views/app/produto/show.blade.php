@extends('app.layouts.basico')

@section('titulo', 'Produtos')

@section('conteudo')

<div class="conteudo-pagina">

  <div class="titulo-pagina-2">
    <h1> Ficha do Produto</h1>
  </div>
  <br>
  <br>
  <div class="menu">
    <ul>
      <li><a href="{{ route('produto.index') }}">Voltar</a></li>
      <li><a href="{{ route ('produto.index') }}">Produtos Cadastrados</a></li>
    </ul>
  </div>
  <br>
  <div class="informacao-pagina">

    <div style="width: 30%; margin-left: auto; margin-right: auto;">
      <table border="1">
        <tr>
          <td style="padding:10px;">ID</td>
          <td>{{ $produto->id }}</td>
        </tr>
        <tr>
          <td style="padding:10px;">Nome</td>
          <td>{{ $produto->nome }}</td>
        </tr>
        <tr>
          <td style="padding:10px;">Descrição</td>
          <td>{{ $produto->descricao }}</td>
        </tr>
        <tr>
          <td style="padding:10px;">Peso</td>
          <td>{{ $produto->peso }} kg</td>
        </tr>
        <tr>
          <td style="padding:10px;">Unidade de Medida</td>
          <td>{{ $produto->unidade_id }}</td>
        </tr>
      </table>
    </div>
  </div>

</div>

@endsection