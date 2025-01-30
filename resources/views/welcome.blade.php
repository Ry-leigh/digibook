<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite('resources/js/app.js')
    @endif
</head>
<style>
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
  width: 100%;
}

.backgroundimg {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url("welcomebg.png");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  z-index: -1;
}

.top-left-buttons {
  display: flex;
  position: absolute;
  top: 20px;
  left: 20px;
  gap: 10px;
}

.button-container {
  position: absolute;
  bottom: 15%;
  left: 50%;
  transform: translateX(-50%);
}

.button {
  width: 200px;
  height: 60px;
  background-image: url("button.png");
  background-size: 100% 100%;
  background-position: center;
  background-color: transparent;
  border: none;
  color: white;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

@media (max-width: 768px) {
  .button {
    width: 150px;
    height: 50px;
    font-size: 18px;
  }
}

@media (max-width: 480px) {
  .button {
    width: 120px;
    height: 40px;
    font-size: 16px;
  }
}
</style>
<body>

<div class="backgroundimg">
    <h1>Digibook</h1>

    @if (Route::has('login'))
        @auth
            <a href="{{ url('/digibook') }}">    <div class="button-container">
                <button class="button">Start</button>
            </div></a>
        @else
            <a href="{{ route('login') }}"><div class="top-left-buttons">
                <button class="button">Login</button>
            </div></a> <br>
            @if (Route::has('register'))
                <a href="{{ route('register') }}"><div class="top-left-buttons">
                    <button class="button">Register</button>
                </div></a> <br>
            @endif
        @endauth
    @endif

    <footer>
        Group1. All Rights Reserved
    </footer>
</div>
</body>
</html>
