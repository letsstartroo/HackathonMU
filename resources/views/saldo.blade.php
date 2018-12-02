@extends('layouts.app')

@section('content')
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="/">Home</a></li>
        <li><a href="/saldo">Saldo</a></li>
        <li><a href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Sair</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s6"><a href="#test1">Saldo</a></li>
        <li class="tab col s6"><a href="#test2">Adicionar Saldo</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
      <div class="input-field col s6">
          <input id="custo" type="text" class="validate" value="3.85" disabled>
          <label for="custo">Custo Unitário</label>
        </div>
        <div class="input-field col s6">
          <input id="saldo" type="text" class="validate" value="32.50" disabled>
          <label for="saldo">Saldo</label>
        </div>
    </div>
    <div id="test2" class="col s12">
<div class="row center-align">
        <div class="input-field col s12">
          <input id="valor" type="text" class="validate">
          <label for="valor">Valor</label>
        </div>
        <div class="input-field col s12">
          <input id="nome" type="text" class="validate">
          <label for="nome">Nome</label>
        </div>
        <div class="input-field col s12">
          <input id="cpf" type="text" class="validate">
          <label for="cpf">CPF</label>
        </div>
        <div class="input-field col s12">
          <input id="conta" type="text" class="validate">
          <label for="conta">Conta</label>
        </div>
        <div class="input-field col s6">
          <input id="vencimento" type="text" class="validate">
          <label for="vencimento">Vencimento</label>
        </div>
        <div class="input-field col s6">
          <input id="ccr" type="text" class="validate">
          <label for="ccr">CCR</label>
        </div>
        <a class="waves-effect waves-light btn center-align">Adicionar</a>
      </div>
    </div>
  </div>

          
@endsection
