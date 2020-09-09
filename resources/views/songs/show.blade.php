@extends('layouts.layout')

@section('main-content')
  <h1>Dettagli song: {{ $song->title }}</h1>

  <div class="info-show">
    <ul>
      <li><b>Genere:</b> {{ $song->genre }}</li>
      <li><b>Descrizione:</b> {{ $song->description }}</li>
    </ul>
  </div>

  <div class="immagine-show">
    <img src="{{ $song->image }}" alt="{{ $song->title }}">
  </div>


  <h3 style="width: 30%";>Testo canzone</h3>
  <p style="width: 20%">{{ $song->text }}</p>

  <div>
    <a href="{{ route('albums.index') }}">Home</a>
  </div>
@endsection
