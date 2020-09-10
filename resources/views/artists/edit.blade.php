@extends('layouts.layout')

@section('main-content')
  <div>
    <a href="{{ route('home') }}">Home</a>
  </div>
  
  <h1 class="red">Modifica artista {{ $artist->name }}</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
  </div>
  @endif

  <form action="{{ route('artists.update', $artist->id ) }}" method="post">
    @csrf
    @method('PUT')

    <label>Anno</label><br>
    <input type="number" name="year" value="{{ $artist->year }}"><br>

    <label>Descrizione</label><br>
    <textarea rows="4" cols="50" name="description">{{ $artist->description }}</textarea><br>

    <div>
      <h3>Lista sponsor</h3>
      @foreach ($sponsors as $sponsor)
        <div>
          <input type="checkbox" name="sponsors[]" {{ ($artist->sponsors->contains($sponsor)) ? 'checked' : '' }} value="{{ $sponsor->id }}">
          <span>{{ $sponsor->name }}</span>
        </div>
      @endforeach
    </div>

    <input type="submit" value="Modifica">
  </form>
@endsection
