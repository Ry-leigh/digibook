<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .background-scene {
        position: relative;
        background-image: url('{{ asset('images/chapter-covers/chapter1.jpg') }}') ;
        background-size: cover;
        background-position: center;
        height: 100%;
        object-fit: cover;
        background-repeat: no-repeat;
    }

    .title-box {
        margin: 0 auto;
        width: 100%;
        height: 5rem;
        background: radial-gradient(ellipse at 50% 120%, rgba(0,0,0,0.616185516672036) 0%, rgba(0,0,0,0.5440205682184278) 37%, rgba(0,0,0,0.32752572285760306) 53%, rgba(255,255,255,0) 70%);
        background-position: center;
        position: absolute;
        bottom: 10.5rem;
        left: 50%;
        transform: translateX(-50%);
    }

    .title-box > h1 {
        color: white;
        font-size: 2rem;
        text-align: center;
        margin: 2.2rem 0 0 0;
        font-weight:100
    }

    .no-title-box {
        margin: 0 auto;
        width: 100%;
        height: 2.5rem;
        background: radial-gradient(ellipse at 50% 120%, rgba(0,0,0,0.616185516672036) 0%, rgba(0,0,0,0.5440205682184278) 27%, rgba(0,0,0,0.32752572285760306) 44%, rgba(255,255,255,0) 70%);
        background-position: center;
        position: absolute;
        bottom: 10.5rem;
        left: 50%;
        transform: translateX(-50%);
    }

    .no-title-box > h1 {
        display: none;
    }

    .dialogue-box {
        margin: 0 auto;
        width: 100%;
        height: 13rem;
        background: radial-gradient(ellipse at 50% -20%, rgba(0,0,0,0.616185516672036) 0%, rgba(0,0,0,0.5440205682184278) 47%, rgba(0,0,0,0.32752572285760306) 63%, rgba(255,255,255,0) 80%);
        background-position: center;
        position: absolute;
        bottom: -2.5rem;
        left: 50%;
        transform: translateX(-50%);
    }

    .dialogue-box::before {
        content: '';
        position: absolute;
        top: 0.2rem;
        left: 50%;
        transform: translateX(-50%);
        width: 40%;
        height: 2px;
        border-radius: 100%;
        background-color: rgb(195, 148, 29);
    }

    .dialogue-box > p{
        display: block;
        color: white;
        font-size: 1.2rem;
        text-align: center;
        margin: 0.5rem auto;
        letter-spacing: 0.04rem;
    }

    .dialogue-box > p:nth-child(1) {
        margin: 1rem 0 0 0;
    }

    .loader {
        height: 1.3rem;
        position: absolute;
        bottom: 0.4rem;
        left: 50%;
        transform: translateX(-50%);
        filter: hue-rotate(20deg) saturate(1) brightness(10);
    }
</style>
<body>
    <div class="background-scene">
        <div class="title-box">
            <h1>Patrick</h1>
        </div>
        <div class="dialogue-box">
            <p>May g-Cash ka?</p>
        </div>
    </div>
</body>
</html>
{{-- Last scene/stanza --}}
{{-- <form method="POST" action="{{ route('chapters.create', $chapter) }}">
    @csrf
    <button type="submit">Next Chapter</button>
</form> --}}
