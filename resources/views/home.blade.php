@extends('layouts.app')

@section('content')
  <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
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

<div id="map"></div>
<iframe id="iframe" ></iframe>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNSviNz-IMVTYpP_cHflROZ1eqnKXUFxw&callback=initMap"
    async defer></script>
 
 
<!-- <div class="fixed-action-btn">
  <a id="btn_fab" class="btn-floating btn-large blue">
    <i class="large material-icons">search</i>
  </a>
</div> -->

<!-- Modal Structure -->
  <div id="modal_search" class="modal">
    <div class="modal-content">
      <div class="input-field col s12">
        <input id="origem" type="text" class="validate">
        <label for="origem">Origem</label>
      </div>
      <div class="input-field col s12">
        <input id="destino" type="text" class="validate">
        <label for="destino">Destino</label>
      </div>
      <div class="row center">
        <a id="btn_close_modal" class="waves-effect waves-light btn center-align">Pesquisar</a>
      </div>
    </div>
  </div>


    <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
           <div id="cl_md" class="collection">
                
            </div>
    </div>
  </div>
          
@endsection
