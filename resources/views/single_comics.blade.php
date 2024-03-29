@extends('layout.app')

@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="blue-container">
            <div class="my-container">
                <img src="{{ $single_comics['thumb'] }}" alt="" class="thumb-comic">
            </div>
        </div>
    </div>


    <!-- Contenitore descrizione singolo fumetto -->
    <div class="my-container">
        <div class="row">

            <!-- Titolo -->
            <div class="col-8">
                <h2>{{ $single_comics['title'] }}</h2>

                <!-- Prezzo e descrizione -->
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

            <!-- Adv image -->
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

    <!-- Contenitore informazioni singolo fumetto -->
    <div class="bg-grey">
        <div class="my-container">
            <div class="row">
                <div class="col-6 my-5">
                    <h3>Talent</h3>
                    <ul class="list-unstyled mt-4">
                        <li class="d-flex justify-content-between">
                            <span>Title:</span>
                            <span class="me-4 color-blue">{{ $single_comics['title'] }}</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Type:</span>
                            <span class="me-4 color-blue">{{ $single_comics['type'] }}</span>
                        </li>
                    </ul>
                </div>
                <div class="col-6 my-5">
                    <h3>Specs</h3>
                    <ul class="list-unstyled mt-4">
                        <li class="d-flex justify-content-between">
                            <span>Series:</span>
                            <span class="me-4">{{ $single_comics['series'] }}</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Price:</span>
                            <span class="me-4">{{ $single_comics['price'] }}</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>On sale date:</span>
                            <span class="me-4">{{ $single_comics['sale_date'] }}</span>
                        </li>
                    </ul>
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
