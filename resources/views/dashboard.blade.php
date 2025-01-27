<x-app-layout>
    <a class="text-blue-500" href="{{ url('/') }}">Return</a> <br> <br>
    <h1 class="text-9xl font-black text-center" style="">Florante at Laura</h1> <br> <br>
    <div class="">
        <a class="text-blue-500" href="{{ route('dictionary.index') }}" >Dictionary</a>
        <a class="text-blue-500" href="{{ route('achievement.index') }}">Achievements</a>
        <a class="text-blue-500" href="{{ url('/about') }}">About</a>
        <button>Mute/Unmute</button> <br>
        <a class="text-blue-500" href="{{ route('chapters.index') }}">Play Game</a>
    </div>
</x-app-layout>
