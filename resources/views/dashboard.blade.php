<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Florante at Laura</title>
</head>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    body {
        background:
            linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 20%, rgba(0, 0, 0, 0.695) 100%) no-repeat,
            url('{{ asset('images/dashboard-resources/background.png') }}') no-repeat;
        background-size: 100% 100%, cover;
        background-repeat: no-repeat;
    }


    .dropdown {
        position: absolute;
        top: 2rem;
        left: 1rem;
    }

    .nav {
        display: flex;
        justify-content: flex-end;
        padding: 1rem 3rem 0 0;
    }

    .nav-button, .sound-button {
        height: 4.5rem;
        width: auto;
        margin: 1rem 1.2rem;
        border-radius: 50%;
        aspect-ratio: 1/1;
        cursor: pointer;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .sound-button#mute {
        background-image: url('{{ asset('images/dashboard-resources/mute.png') }}');
    }

    .sound-button#unmute {
        background-image: url('{{ asset('images/dashboard-resources/unmute.png') }}');
    }

    .title {
        position: absolute;
        right: 12rem;
        top: 7rem;
        height: 27rem;
    }

    .play-button {
        position: absolute;
        right: 8rem;
        bottom: 3rem;
        height: 13rem
    }
</style>
<body>
    <div class="dropdown">
        @include('layouts.navigation')
    </div>
    <nav class="nav">
        <a href="{{ route('dictionary.index') }}" >
            <img class="nav-button" src="{{ asset('images/dashboard-resources/dictionary.png') }}" alt="Dicitonary">
        </a>
        <a href="{{ route('achievement.index') }}">
            <img class="nav-button" src="{{ asset('images/dashboard-resources/achievements.png') }}" alt="Achievement">
        </a>
        <a href="{{ url('/about') }}">
            <img class="nav-button" src="{{ asset('images/dashboard-resources/about.png') }}" alt="About">
        </a>
        <div class="sound-button" id="unmute" onclick="toggleMute()"></div>
        <script>
            function toggleMute() {
                const button = document.getElementById("mute") || document.getElementById("unmute");
                const muteImageUrl = "{{ asset('images/dashboard-resources/mute.png') }}";
                const unmuteImageUrl = "{{ asset('images/dashboard-resources/unmute.png') }}";

                if (button.id === "mute") {
                    button.id = "unmute";
                    button.style.backgroundImage = `url(${unmuteImageUrl})`;
                } else {
                    button.id = "mute";
                    button.style.backgroundImage = `url(${muteImageUrl})`;
                }
            }
        </script>
    </nav>
    <img class="title" src="{{ asset('images/dashboard-resources/title.png') }}" alt="Florante & Laura">
    <div class="">
        <a href="{{ route('chapters.index') }}">
            <img class="play-button" src="{{ asset('images/dashboard-resources/play-button.png') }}" alt="Play">
        </a>
    </div>
</body>
</html>
