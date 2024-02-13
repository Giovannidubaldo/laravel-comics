@extends('layout.app')

@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron"></div>

    <!-- Contenitore descrizione singolo fumetto -->
    <div class="my-container">
        <div class="row">
            <div class="col-8">
                <h2>{{ $single_comics['title'] }}</h2>
                <div class="row mt-4">
                    <div class="col-8 banner">
                        <div class="d-flex justify-content-between align-items-center">
                            <p>U.S. Price: <span class="text-white ms-2">{{ $single_comics['price'] }}</span></p>
                            <p class="text-uppercase">available</p>
                        </div>
                    </div>
                    <div class="col-4 banner">
                        <span class="text-center text-white">Check Availability &#9662</span>
                    </div>
                </div>
                <p class="mt-4">{{ $single_comics['description'] }}</p>
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-end">
                    <span class="text-uppercase">advertisement</span>
                </div>
                <div class="d-flex justify-content-end">
                    <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom - main -->
    <div class="bottom-main">
        <div class="container">
            <div class="row">

                <!-- Lista link -->
                <ul class="list-unstyled d-flex justify-content-center align-items-center">
                    <li>
                        <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
                        <a href="#">digital comics</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
                        <a href="#">dc merchandising</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
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
@endsection
