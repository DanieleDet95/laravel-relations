@extends('layouts.layout')

@section('main-content')

  <h1>Dettagli Artista: {{ $artist->name }}</h1>

  <div class="info-show">
    <ul>
      <li>Anno di nascita: {{ $artist->year }}</li>
      <li>Descrizione: {{ $artist->description }}</li>
    </ul>
  </div>

  <div class="immagine-show">
    <img src="{{ $artist->image }}" alt="{{ $artist->name }}">
  </div>

  @foreach ($artist->albums as $album)
    <a href="{{ route('albums.show' , $album) }}">Visualizza album</a>
  @endforeach

  <div>
    <a href="{{ route('albums.index') }}">Home</a>
  </div>

@endsection
