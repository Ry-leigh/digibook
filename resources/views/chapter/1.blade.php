<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kabanata 1</title>
    <link rel="stylesheet" href="{{ asset('css/chapter.css') }}">
</head>
<body id="game">
    <div class="background-scene" id="background" style="background-image: url('{{ asset('images/chapter/1/0.png') }}')">
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
                text: "Sa isang madilim, gubat na mapanglaw,\ndawag na matinik ay walang pagitan,\nhalos naghihirap ang kay Pebong silang\ndumalaw sa loob na lubhang masukal.",
                narrator: null,
                choices: null
            },
            {
                text: "Malalaking kahoy ang inihahandog,\npawang dalamhati, kahapisa't lungkot;\nhuni pa ng ibon ay __________\nsa lalong matimpi't nagsasayang loob.",
                narrator: null,
                choices: [
                    { text: "nakagugulo", isCorrect: false },
                    { text: "madilim", isCorrect: false },
                    { text: "nakalulunos", isCorrect: true },
                    { text: "nakakapikon", isCorrect: false }
                ]
            },
            {
                text: "Tanang mga baging na namimilipit\nsa __________ kahoy ay balot ng tinik;\nmay bulo ang bunga't nagbibigay-sakit\nsa kanino pa mang sumagi't malapit.",
                narrator: null,
                choices: [
                    { text: "sanga nang", isCorrect: false },
                    { text: "sanga ng", isCorrect: true },
                    { text: "sanga at", isCorrect: false },
                    { text: "sangang", isCorrect: false }
                ]
            },
            {
                text: "Ang mga bulaklak ng nagtayong kahoy,\npinakapamuting nag-ungos sa dahon;\npawang kulay-luksa at nakikiayon\nsa nakaliliyong masangsang na amoy.",
                narrator: null,
                choices: null
            },
            {
                text: "Karamiha'y Sipres at Higerang kutad\nna ang lihim niyon ay nakakasindak;\nito'y walang bunga't daho'y malalapad\nna nakadidilim sa loob ng gubat.",
                narrator: null,
                choices: null
            },
            {
                text: "Ang mga hayop pang dito'y gumagala,\nkaramiha'y S'yerpe't Basilisko'y madla\nHayena't Tigreng ganid _______ nagsisila\nng buhay ng tao't daiging kapuwa.",
                narrator: null,
                choices: [
                    { text: "na", isCorrect: true },
                    { text: "upang", isCorrect: false },
                    { text: "nang", isCorrect: false },
                    { text: "dahil", isCorrect: false }
                ]
            },
            {
                text: "Ito'y gubat manding sa pinto'y malapit\nng Avernong Reyno ni Plutong masungit;\nang nasasakupang lupa'y dinidilig\nng Ilog Kositong ______ ang tubig.",
                narrator: null,
                choices: [
                    { text: "sapagkat", isCorrect: false },
                    { text: "at", isCorrect: false },
                    { text: "kamandag", isCorrect: true },
                    { text: "rito", isCorrect: false }
                ]
            },
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
