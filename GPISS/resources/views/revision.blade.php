@extends('layouts.header3')
@section('contenido')

<link rel="stylesheet" href="{{ asset('css/revision.css') }}" />
<br>
  <div class="revision-container">
    <h2>Detalles del Proyecto</h2>

    <div class="info-section">
      <label><strong>Titulo</strong></label>
      <input type="text" value="StockOn" disabled />
      <button class="comment-btn">Agregar comentario</button>
    </div>

    <div class="info-section">
      <label><strong>Lider</strong></label>
      <input type="text" value="Estrella Aguillón Torrijos" disabled />
      <button class="comment-btn">Agregar comentario</button>
    </div>

    <div class="info-section">
      <label><strong>Integrantes</strong></label>
      <textarea disabled>
Máximo Calderón Ibáñez
Darío Emilio Ledesma Fuentes
Valentina Velázquez Domínguez
Selene Beatriz Andrade Montenegro
Luisa Fernanda Venturini Salazar
      </textarea>
      <button class="comment-btn">Agregar comentario</button>
    </div>

    <div class="info-section">
      <label><strong>Descripción</strong></label>
      <textarea disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</textarea>
      <button class="comment-btn">Agregar comentario</button>
    </div>

    <div class="info-section">
      <label><strong>Objetivo General</strong></label>
      <textarea disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...</textarea>
      <button class="comment-btn">Agregar comentario</button>
    </div>

    <div class="rating-section">
    <label for="calificacion"><strong>Calificación</strong></label>
    <input type="number" id="calificacion" min="1" max="10" step="0.1" placeholder="Ingresa una calificación" />
    <button class="send-rating-btn">Enviar calificación</button>
  </div>
</div>

  </div>
<br>
  @endsection