<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
</head>
<body>
    <form method="POST" action="{{ route('achievement.about') }}">
        @csrf
        @method('PUT')
        <button type="submit">Return</button>
    </form>
    <h1>About Us</h1>
    <br>
    <h2>FrontDevs</h2>
    <h4>Lei</h4>
    <h4>Embrie</h4>
    <h4>Ker</h4>
    <h4>Joshua</h4>
    <br>
    <h2>FrontBackend</h2>
    <h4>Ry</h4>
    <h4>Ker</h4>
    <br>
    <h2>Graphiczzz</h2>
    <h4>CJ</h4>
    <br>
    <h2>Re:Search</h2>
    <h4>Ate Jo</h4>
    <h4>Migs</h4>
    <h4>Sam</h4>
    <h4>Nick</h4>
    <h4>Romar</h4>
</body>
</html>
