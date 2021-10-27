@extends('layout.app')

@section('title', 'Comics')

@section('comics_main')
<main>
    <div class="main-comics">
        @foreach ($comics as $comicbook)
            <div class="card">
                <img src="{{ $comicbook['thumb'] }}" alt="comicbook cover">
                <h3>{{ $comicbook['title'] }}</h3>
            </div>
        @endforeach
    </div>
    
    <div class="main-button">
        <button>Load More</button>
    </div>
    
    <div class="main-links">
        <div class="container container_main_links">
            <div class="link">
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="buy comics">
                <span>digital comics</span>
            </div>
            <div class="link">
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="buy merchandise">
                <span>dc merchandise</span>
            </div>
            <div class="link">
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="subscribtions">
                <span>subscriptions</span>
            </div>
            <div class="link">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="store locator">
                <span>comic shop locator</span>
            </div>
            <div class="link">
                <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="dc power visa">
                <span>dc power visa</span>
            </div>  
        </div>
    </div>

</main>
@endsection