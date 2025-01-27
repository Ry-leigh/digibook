<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Florante at Laura</title>
</head>
<style>
    body {
        background-image: url('{{ asset('images/chapter-covers/chapter1.jpg') }}');
    }

    .dropdown {
        position: absolute;
    }

    nav {
        display: flex;
        justify-content: flex-end;
        margin: 0.5rem;
    }

    .nav-button {
        height: 7rem;
        width: auto;
        margin: 0.5rem;
        border-radius: 50%;
        aspect-ratio: 1/1;
    }
</style>
<body>
    <div class="dropdown">
        @include('layouts.navigation')
    </div>
    <nav>
        <a href="{{ route('dictionary.index') }}" >
            <img class="nav-button" src="{{ asset('images/achievement-badges/chapter1.jpg') }}" alt="Dicitonary">
        </a>
        <a href="{{ route('achievement.index') }}">
            <img class="nav-button" src="{{ asset('images/achievement-badges/chapter1.jpg') }}" alt="Dicitonary">
        </a>
        <a href="{{ url('/about') }}">
            <img class="nav-button" src="{{ asset('images/achievement-badges/chapter1.jpg') }}" alt="Dicitonary">
        </a>
        <button>
            <img class="nav-button" src="{{ asset('images/achievement-badges/chapter1.jpg') }}" alt="Dicitonary">
        </button>
    </nav>
    <a class="text-blue-500" href="{{ url('/') }}">Return</a>
    <h1 class="text-9xl font-black text-center" style="">Florante at Laura</h1> <br> <br>
    <div class="">
        <a class="text-blue-500" href="{{ route('chapters.index') }}">Play Game</a>
    </div>
</body>
</html>
