@extends('layouts.main')

@section('title', $comic['title'])

@section('main-content')

    <section id="comic-details">
        <div class="container">
            <div class="row">
                <div class="col" id="upper-left">
                    <h1>{{ $comic['title'] }}</h1>
                    <div class="avaible-band d-flex space-between">
                        <p>U.S Price: <span>{{ $comic['price'] }}</span></p>
                        <button class="avaible-btn">check availability</button>
                    </div>
                    <div class="comic-description">
                        <p>{{ $comic['description'] }}</p>
                    </div>
                </div>
                <div class="col" id="upper-right">
                    <p>ADVERTISEMENT</p>
                    <figure>
                        <img src="{{ asset('images/adv.jpg') }}" alt="ad">
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col" id="lower-left">
                    <h3>Talent</h3>
                    <div id="upper-talent">
                        <div class="row">
                            <div class="col talent-left">
                                <h6>Art by:</h6>
                            </div>
                            <div class="col talent-right">
                                <p>
                                    @foreach ($comic['artists'] as $key => $artist)
                                        {{ $artist }}{{ $key < count($comic['artists']) - 1 ? ', ' : '.' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="lower-talent">
                        <div class="row">
                            <div class="col talent-left">
                                <h6>Written by:</h6>
                            </div>
                            <div class="col talent-right">
                                <p>
                                    @foreach ($comic['writers'] as $key => $writer)
                                        {{ $writer }}{{ $key < count($comic['writers']) - 1 ? ', ' : '.' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="lower-right">

                    <h3>Specs</h3>

                    <div id="upper-specs">
                        <div class="row">
                            <div class="col specs-left">
                                <h6>Series:</h6>
                            </div>
                            <div class="col specs-right">
                                <p class="specs-type">ACTION COMICS</p>
                            </div>
                        </div>
                    </div>

                    <div id="lower-specs">
                        <div class="row">
                            <div class="col specs-left">
                                <h6>U.S. Price:</h6>
                            </div>
                            <div class="col specs-right">
                                <p>{{ $comic['price'] }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col specs-left">
                                <h6>On Sale Date:</h6>
                            </div>
                            <div class="col specs-right">
                                <p>{{ $comic['sale_date'] }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
