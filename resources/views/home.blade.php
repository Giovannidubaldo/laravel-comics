<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    {{-- HEADER --}}
    @include('partials.header')

    {{-- MAIN --}}
    <main>
        <div class="jumbotron"></div>
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <img src="{{ $comic['thumb'] }}" alt="" class="img-fluid">
                        <h6 class="text-uppercase mt-3">{{ $comic['series'] }}</h6>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')
</body>

</html>
