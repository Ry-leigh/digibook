<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
    <form method="POST" action="{{ route('achievement.dictionary') }}">
        @csrf
        @method('PUT')
        <button type="submit">Return</button>
    </form>

    @foreach ($dictionaries as $dictionary)
        <div>
            <a href="{{ route('dictionary.show', $dictionary->id) }}">{{ $dictionary->word }}</a>
        </div>
    @endforeach

</body>
</html>
