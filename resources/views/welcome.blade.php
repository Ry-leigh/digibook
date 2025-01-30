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
  position: relative; /* Ensure elements inside can be positioned properly */
}

.backgroundimg {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url("{{ asset('images/welcomebg.png') }}");
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
  z-index: 2; /* Ensure buttons are above the background */
}

.button-container {
  position: absolute;
  bottom: 15%;
  left: 50%;
  transform: translateX(-50%);
  z-index: 2; /* Ensure the Start button is clickable */
}

.button {
  width: 200px;
  height: 60px;
  background-image: url('{{ asset('images/button.png') }}');
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
  z-index: 2; /* Ensure buttons are above the background */
  text-decoration: none; /* Remove underline */
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

<div class="backgroundimg"></div> <!-- Moved background image div out -->

@if (Route::has('login'))
    @auth
    <div class="button-container">
        <a class="button" href="{{ url('/digibook') }}">
            Start
        </a>
    </div>
    @else
    <div class="top-left-buttons">
        <a class="button" href="{{ route('login') }}">
            Login
        </a>
        @if (Route::has('register'))
        <a class="button" href="{{ route('register') }}">
            Register
        </a>
        @endif
    </div>
    @endauth
@endif

</body>
</html>
