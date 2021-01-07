@extends('layouts.main')

{{-- MAIN --}}
@section('content')
    <main>
        <section class="hero">
            <div class="current container">
                <img src="{{ asset('images/cover-home.jpg') }}" alt="">
            </div>
        </section>
        <section class="comics container">
            <ul class="comicsList">
                @foreach ($comics as $comic)
                    <li>
                        <a href="">
                            <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                            <p>{{ $comic['title'] }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
        <section class="merchandise">
            <div class="container">

            </div>
        </section>
    </main>
@endsection

