@extends('app.layouts.basico')

@section('titulo', 'Produtos')

@section('conteudo')

<div class="conteudo-pagina">

  <div class="titulo-pagina-2">
    <h1>Cadastro de Produtos</h1>
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
      <form method="post" action="{{ route('produto.store') }}">

        @csrf
        <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome" class="borda-preta">
        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
        <input type="text" name="descricao" value="{{ old('descricao') }}" placeholder="Descrição" class="borda-preta">
        {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
        <input type="text" name="peso" value="{{ old('peso') }}" placeholder="Peso" class="borda-preta">
        {{ $errors->has('peso') ? $errors->first('peso') : '' }}
        <select name="unidade_id">
          @foreach($unidades as $unidade)
          <option> -- Selecione a Unidade de Medida -- </option>
          <option value="{{$unidade->id}} {{ old ('unidade_id') == $unidade->id }}">{{$unidade->descricao}}</option>
          @endforeach
        </select>
        {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

        <button type="submit" class="borda-preta">Cadastrar</button>
      </form>
    </div>
  </div>

</div>

@endsection