@extends('layouts.main')

{{-- MAIN --}}
@section('content')
    <main>
        <section class="currentHero">
            <img src="{{ $comic['image-hero'] }}" alt="{{ $comic['title'] }}">
            <div class="cover">
                <img src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
            </div>
        </section>
        <section class="container">
            <p>
                {!! $comic['body'] !!}
            </p>
        </section>
    </main>
@endsection
