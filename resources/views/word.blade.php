<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $dictionary->word }}</title>
</head>
<body>
    <nav>
        <a href="{{ route('dictionary.index') }}">Return</a>
    </nav>
    <div>
        Prev... <br>
        <a href="{{ route('dictionary.show', $previous->id) }}">{{ $previous->word }}</a>
    </div>
    <div>
        <h1>{{ $dictionary->word }}</h1>
        <p>{{ $dictionary->definition }}</p>
    </div>
    <div>
        Next... <br>
        <a href="{{ route('dictionary.show', $next->id) }}">{{ $next->word }}</a>
    </div>
</body>
</html>
