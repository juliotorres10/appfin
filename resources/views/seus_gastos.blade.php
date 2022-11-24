@extends('template')

@section('titulo', 'Seus Gastos')

@section('conteudo')
<header class="text-center">
   SEUS GASTOS
</header>

<div class="container d-flex">
    <div class="col-md-12 p-3">
       <p>Gráfico das suas receitas e despesas</p>
    </div>
</div>
@endsection

@section('nav-complementar')
<li class="nav-item">
    <a class="nav-link" href="{{route('seus_gastos')}}">Entenda seus Gastos</a>
</li>
@endsection