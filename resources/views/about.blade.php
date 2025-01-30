<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
</head>
<style>
    /* General Reset */
body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #000000;
    color: #333;
    line-height: 1.6;
}

ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.container {
    width: 80%;
    margin: 0 auto;
}

.header {
    background-image: url(header.png);
    color: #fff;
    text-align: center;
    padding: 2rem 0;
}

.header h1 {
    font-size: 3rem;
    margin: 0;
}

.header p {
    font-size: 1.2rem;
    margin: 0.5rem 0 0;
}

.content {
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
}

.team h2 {

    font-size: 2rem;
    margin-top: 1.5rem;
    color: black;
}

.team ul li {
    margin: 0.5rem 0;
    padding: 0.5rem;
    background: #f9f9fb;
    border-radius: 5px;
    transition: background 0.3s;
}

.team ul li:hover {
    background: grey;
}

.footer {
    background-image: url(footer.png);
    color: #fff;
    text-align: center;
    padding: 1rem 0;
}

.footer p {
    margin: 0;
    font-size: 0.9rem;
}

</style>
<body>
    <form method="POST" action="{{ route('achievement.about') }}">
        @csrf
        @method('PUT')
        <button type="submit"><img style="height: 4.5rem;
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
            top: 1rem;" src="{{ asset('images/chapter/return.png') }}" alt="Dicitonary"></button>
    </form>
    <header class="header">
        <div class="container">
            <h1>About Us</h1>
            <p>Meet the team behind the magic.</p>
        </div>
    </header>

    <main class="content">
        <section class="team">
            <h2>Front Developers</h2>
            <ul>
                <li>Lei Ann Dico</li>
                <li>Embrie Dela Rosa</li>
                <li>Kermari Magmayo</li>
                <li>Joshua Patena</li>
                <li>Romar Samson</li>
            </ul>

            <h2>Front & Backend Developers</h2>
            <ul>
                <li>Ryan Dela Cruz</li>
                <li>Kermari Magmayo</li>
            </ul>

            <h2>Graphics</h2>
            <ul>
                <li>Christian Romero</li>
            </ul>

            <h2>Research</h2>
            <ul>
                <li>Jocelyn Bendoy</li>
                <li>Miguel Ramirez</li>
                <li>Romar Samson</li>
                <li>Nicklee Almaida</li>
                <li>Sem Pintado</li>
            </ul>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Team 1. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
