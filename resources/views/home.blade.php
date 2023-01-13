@extends('layouts.main')

@section('page-title')
    Home
@endsection

@section('page-content')
    <div class="container pt-3">
        @foreach ($comics as $comic)
            <div class="ms-card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" />
                <div class="title">{{ $comic['series'] }}</div>
            </div>
        @endforeach
    </div>
    <button>LOAD MORE</button>
    <section class="pre-footer">
        <div class="container">
            <ul>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <a href="#">DIGITAL COMICS</a>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <a href="#">DC MERCHANDISE</a>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <a href="#">SUBSCRIPTION</a>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <a href="#">COMIC SHOP LOCATOR</a>
                </li>
                <li>
                    <img class="mt-3" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <a href="#">DC POWER VISA</a>
                </li>
            </ul>
        </div>
    </section>
    </main>
@endsection
