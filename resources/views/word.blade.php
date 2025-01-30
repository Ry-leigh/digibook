<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $dictionary->word }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;600&display=swap');

        body {
            background: url('https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvcHgxMDU3NDA0LWltYWdlLWpvYjYzMC1uLWwwZzA4bzczLmpwZw.jpg'); /* Parchment texture */
            font-family: 'EB Garamond', serif;
        }

        .border-decor {
            border: 3px solid rgba(139, 69, 19, 0.7);
            border-radius: 8px;
            padding: 12px;
            background: rgba(255, 239, 213, 0.85);
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .hover-glow:hover {
            transform: scale(1.03);
            transition: transform 0.3s ease-in-out;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body class="p-8 flex flex-col items-center text-gray-900">
    <nav class="w-full max-w-3xl bg-yellow-900 text-white p-4 rounded-lg mb-6 shadow-lg text-center">
        <a href="{{ route('dictionary.index') }}"
           class="text-lg font-semibold hover:text-yellow-300 transition">
           <img style="height: 4.5rem;
        width: auto;
        margin: 1rem 1.2rem;
        border-radius: 50%;
        aspect-ratio: 1/1;
        cursor: pointer;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        position: absolute;
        left: 1rem;
        top: 1rem;" src="{{ asset('images/chapter/return.png') }}" alt="Dicitonary">
        </a>
    </nav>
    <div class="border-decor max-w-3xl w-full text-center p-6">
        <span class="mt-4 text-lg text-gray-800 italic">Prev...</span><br>
        <a href="{{ route('dictionary.show', $previous->id) }}"
           class="text-4xl font-semibold text-yellow-900" >
            {{ $previous->word }}
        </a>
    </div>
    <br>
    <div class="border-decor max-w-3xl w-full text-center p-6">
        <h1 class="text-4xl font-semibold text-yellow-900">
            {{ $dictionary->word }}
        </h1>
        <p class="mt-4 text-lg text-gray-800 italic">
            {{ $dictionary->definition }}
        </p>
    </div>
    <br>
    <div class="border-decor max-w-3xl w-full text-center p-6">
        <span class="mt-4 text-lg text-gray-800 italic">Next...</span><br>
        <a href="{{ route('dictionary.show', $next->id) }}"
           class="text-4xl font-semibold text-yellow-900">
            {{ $next->word }}
        </a>
    </div>
</body>
</html>
