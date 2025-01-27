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
        background-color: cornflowerblue;
        background-image: url({{ asset('images/chapter-covers/chapter3.jpg') }})
    }

    .main-chapter {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        cursor: pointer;
        margin: 2.5rem;
    }

    .main-chapter > h1 {
        background-color: white;
        width: 20rem;
        margin: -1.5rem;
        padding: 0.7rem 2rem;
        border-radius: 50rem;
        z-index: 1;
        font-size: 1.5rem
    }

    .chapter {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 70rem;
        background-color: white;
        border-radius: 0.7rem;
        margin: 0 auto 1rem auto;
        text-align: center;

        /* background: rgba(0, 0, 0, 0.407);
        box-shadow: 0 0.2rem 3rem rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(4.5px);
        -webkit-backdrop-filter: blur(6.5px); */
    }

    .hidden {
        display: none;
    }

    .content {
        width: 100%;
    }

    .content > div {
        height: 13rem;
        width: 100%;
        border-radius: 0.7rem 0.7rem 0 0;
        overflow: hidden;
    }

    .content div > img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .play-button {
        display: block;
        margin: 0.8rem auto;
        text-decoration: none;
        color: black
    }

    .locked-bg {
        filter: grayscale(80%);
    }
</style>
<body>
    <a href="{{ route('dashboard') }}">Return</a>
    <h1>Florante at Laura</h1>
    <div class="main-chapter">
        <h1>Sa Babasa Nito</h1>
        <div class="chapter">
            <div class="hidden content">
                <div>
                    <img src="{{ asset('images/chapter-covers/prologue.jpg') }}" alt="">
                </div>
                <a class="play-button" href="{{ route('chapters.show', 0) }}">
                    @if ($count == 0)
                        Play
                    @elseif($count > 0)
                        Replay
                    @endif
                </a>
            </div>
        </div>
    </div>


    @for ($i = 1; $i <= 30; $i++)
        <div class="main-chapter">
            <h1>Kabanata {{ $i }}</h1>
            <div class="chapter">
                <div class="hidden content">
                    @if ($count >= $i)
                        <div>
                            <img src="{{ asset('images/chapter-covers/chapter' . $i . '.jpg') }}" alt="">
                        </div>
                        <a class="play-button" href="{{ route('chapters.show', [$chapter = $i]) }}">
                            @if ($count == $i)
                                Play
                            @elseif($count > $i)
                                Replay
                            @endif
                        </a>
                    @else
                        <div>
                            <img src="{{ asset('images/chapter-covers/chapter' . $i . '.jpg') }}" alt="" style="filter: grayscale(90%);">
                        </div>
                        <p class="play-button">Locked</p>
                    @endif
                </div>
            </div>
        </div>
    @endfor

    <script>
        const chapters = document.querySelectorAll('.main-chapter');

        chapters.forEach(chapter => {
            const content = chapter.querySelector('.content');
            chapter.addEventListener('click', () => {
                content.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>
