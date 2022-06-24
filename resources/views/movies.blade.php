@extends('layouts.main')


@section('content')
    <div class="container">
        <ul>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card">
                            <li>Titolo: {{ $movie->title }}</li>
                            <li>Lingua: {{ $movie->nationality }}</li>
                            <li>Voto: {{ $movie->vote }}</li>
                        </div>
                    </div>
                @endforeach
            </div>
        </ul>
    </div>
@endsection
