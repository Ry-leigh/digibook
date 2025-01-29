<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sa Babasa Nito</title>
    <link rel="stylesheet" href="{{ asset('css/chapter.css') }}">
</head>
<body id="game">
    <div class="background-scene" id="background" style="background-image: url('{{ asset('images/chapter/0/0.jpg') }}')">
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
                text: "Salamat sa iyo, O nanasang irog,\nkung halagahan mo itong aking pagod,\nang tula ma'y bukal ng bait na kapos,\npakikinabangan ng ibig tumarok.",
                narrator: "Francisco Baltazar",
                choices: null
            },
            {
                text: "Kung sa biglang tingi'y bubot at masaklap\npalibhasa'y hilaw at mura ang balat\nngunit kung namnamin ang sa lamang lasap,\nmasasarapan din ang babasang pantas.",
                narrator: "Francisco Baltazar",
                choices: null
            },
            {
                text: "Di ko hinihinging pakamahalin mo,\ntawana't dustain ang abang tula ko;\ngawin ang ibigi't alpa'y nasa iyo\nay huwag mo lamang baguhin ang berso.",
                narrator: "Francisco Baltazar",
                choices: null
            },
            {
                text: "Kung sa pagbasa mo'y may tulang malabo,\nbago mo hatulang katkatin at liko,\npasuriin muna ang luwasa't hulo,\nat makikilalang malinaw at wasto.",
                narrator: "Francisco Baltazar",
                choices: null
            },
            {
                text: "Ang may tandang letra alinmang talata,\n'di mo mawatasa't malalim na wika,\nang mata'y itingin sa dakong ibaba,\nbuong kahuluga'y mapag-uunawa.",
                narrator: "Francisco Baltazar",
                choices: null
            },
            {
                text: "Hanggang dito ako, O nanasang pantas,\nsa kay Sigesmundo'y huwag ding matulad;\nsa gayong katamis wikang masasarap\nay sa kababago ng tula'y umalat.",
                narrator: "Francisco Baltazar",
                choices: null
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
