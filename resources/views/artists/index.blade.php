@extends('layouts.layout')

@section('main-content')
<h1>Lista artisti</h1>

<div class="artist-flex">

  @foreach ($artists as $artist)

    <div class="artist-block">
      <h2>Nome originario: {{ $artist->name }}</h2>
      <p>Anno di nascita: {{ $artist->year }}</p>
      <p>Descrizione: {{ $artist->description }}</p>
      <img src="{{ $artist->image }}" alt="{{ $artist->name }}">
      @foreach ($artist->albums as $album)
        <li><a href="{{ route('albums.show' , $album) }}">Visualizza album</a></li>
      @endforeach
    </div>

  @endforeach

</div>
@endsection
