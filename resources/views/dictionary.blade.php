<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;600&display=swap');

        body {
            background: url('https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvcHgxMDU3NDA0LWltYWdlLWpvYjYzMC1uLWwwZzA4bzczLmpwZw.jpg');
            font-family: 'EB Garamond', serif;
        }

        .border-decor {
            border: 3px solid rgba(139, 69, 19, 0.7); /* Brownish border */
            border-radius: 8px;
            padding: 10px;
            background: rgba(255, 239, 213, 0.7); /* Soft parchment color */
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
        }

        .hover-glow:hover {
            transform: scale(1.02);
            transition: transform 0.3s ease-in-out;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body class="p-8 flex flex-col items-center text-gray-900">
    <h1 class="text-4xl font-semibold border-b-4 border-yellow-700 pb-2 mb-6 text-center">
        📖 Malalim na Salitang Tagalog
    </h1>
    <form method="POST" action="{{ route('achievement.dictionary') }}" class="mb-6">
        @csrf
        @method('PUT')
        <button type="submit"
            class="bg-gradient-to-r from-red-700 to-red-900 text-white px-6 py-2 rounded-lg
                   shadow-md hover:scale-105 transition transform hover:shadow-lg">
            Return
        </button>
    </form>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-4xl">
        @foreach ($dictionaries as $dictionary)
            <div class="border-decor hover-glow p-4 text-center">
                <a href="{{ route('dictionary.show', $dictionary->id) }}"
                   class="text-xl font-semibold text-yellow-800 italic hover:text-red-800 transition">
                    {{ $dictionary->word }}
                </a>
            </div>
        @endforeach
    </div>

</body>
</html>
