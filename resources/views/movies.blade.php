@extends('layouts.main')


@section('content')
    <div class="container">
        <ul>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card">
                            <li>Titolo: {{ $movie->title }}</li>
                            @if ($movie->title != $movie->original_title)
                                <li>Titolo: {{ $movie->original_title }}</li>
                            @endif
                            <li>Lingua: {{ $movie->nationality }}</li>
                            <li>Voto: {{ round($movie->vote) }}</li>
                        </div>
                    </div>
                @endforeach
            </div>
        </ul>
    </div>
@endsection
