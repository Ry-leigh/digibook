<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Florante at Laura</title>
</head>
<style>
    .locked-bg {
        filter: grayscale(80%)
    }
</style>
<body>
    <a href="{{ route('dashboard') }}">Return</a>
    <h1>Florante at Laura</h1>
    <div class="unlocked-bg" style="background-image: url('{{ asset('images/chapter-covers/prologue.jpg') }}');">
        <h1>Prologue</h1>
        <a class="unlocked-button" href="{{ route('chapters.show', 0) }}">
            @if ($count == 0)
                Play
            @elseif($count > 0)
                Replay
            @endif
        </a>
    </div>

    @for($i = 1; $i <= 30; $i++)
        @if ($count >= $i)
            <div class="unlocked-bg" style="background-image: url('{{ asset('images/chapter-covers/chapter' . $i . '.jpg') }}');">
                <h1>Chapter {{ $i }}</h1>
                <a class="unlocked-button" href="{{ route('chapters.show', [$chapter = $i]) }}">
                    @if ($count == $i)
                        Play
                    @elseif($count > $i)
                        Replay
                    @endif
                </a>
            </div>
        @else
            <div class="locked-bg" style="background-image: url('{{ asset('images/chapter-covers/chapter' . $i .'.jpg') }}');">
                <h1>Chapter {{ $i }}</h1>
                <p class="locked-button">Locked</p>
            </div>
        @endif
    @endfor


</body>
</html>
