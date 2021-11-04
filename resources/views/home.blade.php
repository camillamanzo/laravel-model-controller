@extends('layouts.main')

@section('content')
    <section class="container">
        <div class="row">
            @forelse ($movies as $movie)
            <div class="card col-5 mx-auto">
                <h2>Title: "{{ $movie->title }}"</h2>
                <h3>Original Title: "{{ $movie->original_title }}"</h3>
                <h3>Nationality: {{ $movie->nationality }}</h3>
                <h3>Date: {{ $movie->date }}</h3>
                <h3>Vote: {{ $movie->vote }}</h3>
            </div>
        @empty
            <h3>There are no available movies.</h3>
        @endforelse
        </div>
    </section>
@endsection