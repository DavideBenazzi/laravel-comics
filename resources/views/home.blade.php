@extends('layouts.main')

{{-- MAIN --}}
@section('content')
    <main>
        {{-- HERO --}}
        <section class="hero">
            <div class="current container">
                <img src="{{ asset('images/cover-home.jpg') }}" alt="teen titans cover">
            </div>
        </section>
        <section class="comics container">
            {{-- COMICSLIST --}}
            <ul class="comicsList">
                @foreach ($comics as $comic)
                    <li>
                        <a href="{{ route('comic-detail' , $comic['slug']) }}">
                            <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                            <h4>{{ $comic['title'] }}</h4>
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

