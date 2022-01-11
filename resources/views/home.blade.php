@extends('layout.app')


@section('content')
<h1 class="text-center">Questi sono tutti i film:</h1>
<div class="container text-center">
    @foreach ($movies as $movie)
    <div class="card m-3">
        <h2>Titolo: {{$movie['title']}}</h2>
        <h3>Titolo Originale: {{$movie['original_title']}}</h3>
        <h4>Nazionalità: {{$movie['nationality']}}</>
            <h4>Data di uscita: {{$movie['date']}}</h4>
            <h4>Voto della critica: {{$movie['vote']}}</h4>
    </div>
    @endforeach
</div>


@endsection