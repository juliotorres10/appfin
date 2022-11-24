@extends('template')

@section('titulo', 'Nova Entrada')

@section('conteudo')
<header class="text-center">
   NOVA ENTRADA
</header>

<div class="container d-flex">
    <div class="col-md-12 p-3">
       <form method="POST" action="{{route('processa')}}">
        @csrf

        <div class="mb-3">
          <label for="descricao" class="form-label">Descrição</label>
          <input type="text" required name="descricao" id="descricao" class="form-control" placeholder="Digite a descrição do movimento">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" required type="radio" name="tipo" id="tipo" value="despesas">
            <label class="form-check-label" for="tipo">Despesas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" required type="radio" name="tipo" id="tipo2" value="receita">
            <label class="form-check-label" for="tipo">Receita</label>
          </div>
          <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" required name="valor" id="valor" class="form-control" step="0.1" placeholder="Digite o valor">
          </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

       </form>
    </div>
</div>
@endsection

@section('nav-complementar')
<li class="nav-item">
    <a class="nav-link" href="{{route('seus_gastos')}}">Entenda seus Gastos</a>
</li>
@endsection