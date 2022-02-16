@extends('app.layouts.basico')

@section('titulo', 'Produtos')

@section('conteudo')

<div class="conteudo-pagina">

  <div class="titulo-pagina-2">

    @if (isset($produto->id))
      <h1>Editar Produtos</h1>
    @else
      <h1>Cadastro de Produtos</h1>
    @endif

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
      @if (isset($produto->id))
      <form method="post" action="{{ route('produto.update', ['produto' => $produto ?? ''->id]) }}">
        @csrf
        @method('PUT')
      @else
          <form method="post" action="{{ route('produto.store') }}">
          @csrf
      @endif    
          <input type="text" name="nome" value="{{ $produto->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
          {{ $errors->has('nome') ? $errors->first('nome') : '' }}
          
          <input type="text" name="descricao" value="{{ $produto->descricao ?? old('descricao') }}" placeholder="Descrição" class="borda-preta">
          {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
          
          <input type="text" name="peso" value="{{ $produto->peso ?? old('peso') }}" placeholder="Peso" class="borda-preta">
          {{ $errors->has('peso') ? $errors->first('peso') : '' }}
          
          <select name="unidade_id">
            @foreach($unidades as $unidade)
            <option> -- Selecione a Unidade de Medida -- </option>
            <option value="{{$unidade->id}}" {{ ($produto->unidade_id ?? old ('unidade_id')) == $unidade->id ? 'selected' : '' }}>{{$unidade->descricao}}</option>
            @endforeach
          </select>
          {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

          <button type="submit" class="borda-preta">Cadastrar</button>
        </form>
    </div>
  </div>

</div>

@endsection