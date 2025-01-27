<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Achievements</title>
</head>
<style>
    .locked-badge {
        filter: grayscale(95%);
    }
</style>
<body>
    <a href="{{ route('dashboard') }}">Return</a>
    @if ($achievements->visit_dictionary == 0)
        <div>
            <img class="locked-badge" src="{{ asset('images/achievement-badges/bookworm.jpg') }}" alt="">
            <h3>Bookworm</h3>
            <p>Secret Achievement</p>
        </div>
    @else
        <div>
            <img class="unlocked-badge" src="{{ asset('images/achievement-badges/bookworm.jpg') }}" alt="">
            <h3>Bookworm</h3>
            <p>Secret Achievement</p>
        </div>
    @endif

    @if ($achievements->visit_about == 0)
        <div>
            <img class="locked-badge" src="{{ asset('images/achievement-badges/thanks-to-you-from-us.jpg') }}" alt="">
            <h3>Thanks to You From Us</h3>
            <p>Secret Achievement</p>
        </div>
    @else
        <div>
            <img class="unlocked-badge" src="{{ asset('images/achievement-badges/thanks-to-you-from-us.jpg') }}" alt="">
            <h3>Thanks to You From Us</h3>
            <p>Secret Achievement</p>
        </div>
    @endif

    @if ($count > 0)
        <div>
            <img class="unlocked-badge" src="{{ asset('images/achievement-badges/prologue.png') }}" alt="">
            <h3>Prologue</h3>
            <p>Finish the Prologue</p>
        </div>
    @else
        <div>
            <img class="locked-badge" src="{{ asset('images/achievement-badges/prologue.png') }}" alt="">
            <h3>Prologue</h3>
            <p>Finish the Prologue</p>
        </div>
    @endif

    @for ($i = 1; $i <= 30; $i++)
        @if ($count > $i)
            <div>
                <img class="unlocked-badge" src="{{ asset('images/achievement-badges/chapter' . $i . '.jpg') }}" alt="">
                <h3>Chapter {{ $i }}</h3>
                <p>Finish Chapter {{ $i }}</p>
            </div>
        @else
            <div>
                <img class="locked-badge" src="{{ asset('images/achievement-badges/chapter' . $i . '.jpg') }}" alt="">
                <h3>Chapter {{ $i }}</h3>
                <p>Finish Chapter {{ $i }}</p>
            </div>
        @endif
    @endfor
</body>
</html>
