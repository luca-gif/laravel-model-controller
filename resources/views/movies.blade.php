@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="row">

            <ul class="col-3"
                @foreach ($movies as $movie) >
                <div class="card">
                    <li>Titolo: {{ $movie->title }}</li>
                    <li>Lingua: {{ $movie->nationality }}</li>
                    <li>Voto: {{ $movie->vote }}</li>
                </div @endforeach>
            </ul>

        </div>
    </div>
@endsection
