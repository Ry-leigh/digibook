<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kabanata 7</title>
    <link rel="stylesheet" href="{{ asset('css/chapter.css') }}">
</head>
<body id="game">
    <div class="background-scene" id="background" style="background-image: url('{{ asset('images/chapter/7/0.png') }}')">
        <a href="{{ route('chapters.index') }}"><img class="return-button" src="{{ asset('images/chapter-covers/return.png') }}" alt="Return"></a>
        <div class="lives"><img src="{{ asset('images/chapter/heart.png') }}" alt="Lives"> x <span id="lives-count">5</span></div>
        <div class="narrator-box no-narrator-box"><h1></h1></div>
        <div class="dialogue-box">
            <p id="dialogue"></p>
        </div>
        <img class="loader" src="{{ asset('images/chapter/loader.gif') }}" alt="">
        <div class="choice-box no-choice" id="choices">
            <div class="choice"><p></p></div>
            <div class="choice"><p></p></div>
            <div class="choice"><p></p></div>
            <div class="choice"><p></p></div>
        </div>
        <form class="next-chapter" method="POST" action="{{ route('chapters.create', $chapter) }}">
            @csrf
            <button type="submit" style="background-image: url('{{ asset('images/chapter/next-chapter.png') }}');">I</button>
        </form>
    </div>
    <script>
        window.dialogues = [
            {
                text: "...",
                narrator: null,
                choices: null
            }
        ];
    </script>
    <script src="{{ asset('js/chapter.js') }}"></script>
</body>
</html>
{{--

//for dialogues:
{
    text: "lorem",
    narrator: null,
    choices: null
},

//for questions and choices, isCorrect: true if true, false if false:
{
    text: "lorem",
    narrator: null,
    choices: [
        { text: "lorem", isCorrect: false },
        { text: "lorem", isCorrect: false },
        { text: "lorem", isCorrect: false },
        { text: "lorem", isCorrect: false }
    ]
},


--}}
