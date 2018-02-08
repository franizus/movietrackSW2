@extends ('layouts.master', ['tipo' => 'Series']) 

@section ('head')
@extends('layouts.head')
@endsection

@section ('content')
<section class="row">
    <div class="col-12">
        <h3 class="mb-4">
            @switch($type)
                @case('popular')
                    Populares
                    @break
                @case('airing_today')
                    Al aire hoy
                    @break
                @case('top_rated')
                    Mejor Calificadas
                    @break
                @case('on_the_air')
                    Actualmente en TV
                    @break
                @default
            @endswitch
        </h3>
    </div>
    @foreach ($series as $serie)
    <div class="col-sm-3 mb-4">
        <div class="card" style="width:250px">
            <img class="card-img-top" src="{!! 'https://image.tmdb.org/t/p/w500' . $serie['poster_path'] !!}" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">{{ $serie['original_name'] }}</h4>
                <p class="card-text">Rating: {{ $serie['vote_average'] }}</p>
                <a class="btn btn-primary btn-block" onclick="location.href='{!! '/serie/' . $serie['id'] !!}'">mas</a>
                <a class="btn btn-success btn-block text-white" onclick="location.href='#'">Seguir</a>
            </div>
        </div>
    </div>
    @endforeach
</section>
@endsection