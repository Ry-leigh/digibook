<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prologue</title>
</head>
<body>
{{-- code ni Ker --}}

{{-- Last scene/stanza --}}
<form method="POST" action="{{ route('chapters.create', $chapter) }}">
    @csrf
    <button type="submit">Next Chapter</button>
</form>
</body>
</html>
