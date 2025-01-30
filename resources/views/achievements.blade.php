<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Achievements</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;600&display=swap');

        body {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 20%, rgba(0, 0, 0, 0.695) 100%) no-repeat,
                        url('{{ asset('images/dashboard-resources/background.png') }}') no-repeat;
            background-size: 100% 100%, cover;
            font-family: 'EB Garamond', serif;
        }

        .locked-badge {
            filter: grayscale(95%);
            opacity: 0.6;
        }

        .achievement-card {
            background: rgba(255, 239, 213, 0.9); /* Soft parchment effect */
            border: 3px solid rgba(139, 69, 19, 0.7); /* Classic brown border */
            border-radius: 10px;
            padding: 16px;
            width: 100%;
            max-width: 500px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
        }

        .achievement-card:hover {
            transform: scale(1.03);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body class="p-8 text-gray-900 flex flex-col items-center">

    <!-- Return Button -->
    <nav class="w-full max-w-3xl bg-yellow-900 text-white p-4 rounded-lg mb-6 shadow-lg text-center">
        <a href="{{ route('dashboard') }}"
           class="text-lg font-semibold hover:text-yellow-300 transition">
            🔙 Bumalik sa Dashboard
        </a>
    </nav>

    <!-- Achievements List (One per Row) -->
    <div class="flex flex-col gap-6 items-center w-full max-w-lg">

        <!-- Bookworm Achievement -->
        <div class="achievement-card">
            <img class="{{ $achievements->visit_dictionary == 0 ? 'locked-badge' : 'unlocked-badge' }}"
                 src="{{ asset('images/achievement-badges/bookworm.jpg') }}"
                 alt="Bookworm" class="w-full h-48 object-cover rounded-md">
            <h3 class="text-xl font-semibold mt-3">Bookworm</h3>
            <p class="text-md text-gray-700 italic">Secret Achievement</p>
        </div>

        <!-- Thanks to You Achievement -->
        <div class="achievement-card">
            <img class="{{ $achievements->visit_about == 0 ? 'locked-badge' : 'unlocked-badge' }}"
                 src="{{ asset('images/achievement-badges/thanks-to-you-from-us.jpg') }}"
                 alt="Thanks to You" class="w-full h-48 object-cover rounded-md">
            <h3 class="text-xl font-semibold mt-3">Thanks to You From Us</h3>
            <p class="text-md text-gray-700 italic">Secret Achievement</p>
        </div>

        <!-- Prologue Achievement -->
        <div class="achievement-card">
            <img class="{{ $count > 0 ? 'unlocked-badge' : 'locked-badge' }}"
                 src="{{ asset('images/achievement-badges/prologue.png') }}"
                 alt="Prologue" class="w-full h-48 object-cover rounded-md">
            <h3 class="text-xl font-semibold mt-3">Prologue</h3>
            <p class="text-md text-gray-700">Finish the Prologue</p>
        </div>

        <!-- Chapter Achievements (1 per row) -->
        @for ($i = 1; $i <= 30; $i++)
            <div class="achievement-card">
                <img class="{{ $count > $i ? 'unlocked-badge' : 'locked-badge' }}"
                     src="{{ asset('images/achievement-badges/chapter' . $i . '.jpg') }}"
                     alt="Chapter {{ $i }}" class="w-full h-48 object-cover rounded-md">
                <h3 class="text-xl font-semibold mt-3">Chapter {{ $i }}</h3>
                <p class="text-md text-gray-700">Finish Chapter {{ $i }}</p>
            </div>
        @endfor
    </div>

</body>
</html>
