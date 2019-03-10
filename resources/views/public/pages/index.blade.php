@extends('layouts.app')

@section('title', 'About IBDB')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Página de Inicio</h1>
      <p class="lead">Bienvenido a IBDB, una aplicación sobre libros.</p>
      <hr>
      <!-- Trigger del -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalIndex">
    Disclaimer
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="modalIndex" tabindex="-1" role="dialog" aria-labelledby="modalIndexLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalIndexLabel">IBDB Disclaimer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Nos beneficiaremos de tus datos para alcanzar nuestra meta de dominar el mundo y acabar con Javascript.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar Modal</button>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      Mostrar vídeo.
  </button>
  <div class="collapseembed-responsive embed-responsive-21by9" id="collapseExample">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VldJrHVNHF8"></iframe>
    </div>

  
@endsection