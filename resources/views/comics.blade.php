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

        <h2 class="text-center p-5">Work in progress...</h2>

        <!-- Bottom - main -->
        <div class="bottom-main">
            <div class="container">
                <div class="row">

                    <!-- Lista link -->
                    <ul class="list-unstyled d-flex justify-content-center align-items-center">
                        <li>
                            <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                                alt="">
                            <a href="#">digital comics</a>
                        </li>
                        <li>
                            <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
                            <a href="#">dc merchandising</a>
                        </li>
                        <li>
                            <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}"
                                alt="">
                            <a href="#">subscription</a>
                        </li>
                        <li>
                            <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
                            <a href="#">comic shop locator</a>
                        </li>
                        <li>
                            <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="">
                            <a href="#">dc power visa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')
</body>

</html>
