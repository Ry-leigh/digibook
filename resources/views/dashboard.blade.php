<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-image: url('{{ asset('images/chapter-covers/chapter1.jpg') }}');">
    @include('layouts.navigation')
    <a class="text-blue-500" href="{{ url('/') }}">Return</a> <br> <br>
    <h1 class="text-9xl font-black text-center" style="">Florante at Laura</h1> <br> <br>
    <div class="">
        <a class="text-blue-500" href="{{ route('dictionary.index') }}" >Dictionary</a>
        <a class="text-blue-500" href="{{ route('achievement.index') }}">Achievements</a>
        <a class="text-blue-500" href="{{ url('/about') }}">About</a>
        <button>Mute/Unmute</button> <br>
        <a class="text-blue-500" href="{{ route('chapters.index') }}">Play Game</a>
    </div>
</body>
</html>
