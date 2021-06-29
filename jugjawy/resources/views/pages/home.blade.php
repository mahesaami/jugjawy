@extends('layouts.app')

@section('title')
    Al Jugjawy
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>EXPLORE THE WORLD 
            <br>
            AS EASY ONE CLICK
        </h1>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>

    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 col-sm-6 stats-detail">
                    <h2>10K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 col-sm-6 stats-detail">
                    <h2>20</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 col-sm-6 stats-detail">
                    <h2>1K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 col-sm-6 stats-detail">
                    <h2>10</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Popular Destination</h2>
                        <p>We offer the perfect variety of experiences  to satisfy your desire
                            <br> 
                            for adventure </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                   @foreach ($items as $item)
                   <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                    style="background-image:url('{{$item->galleries->count() ? Storage::url
                    ($item->galleries->first()->image): ''}}');">

                        <div class="travel-country">{{$item->location}}</div>
                        <div class="travel-location">{{$item->title}}</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail', $item->slug)}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                   @endforeach
                   
                </div>
            </div>
        </section>

        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>Our Company's Partners</p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/Networks.png" alt="Logo Networks" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center mt-3">
                        <h2>Our Customer Stories</h2>
                        <p>The honest review 
                            <br>
                            from our beloved customers</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonial-1.png" alt="User"
                                class="mb-4 rounded-circle">
                                <h3>Bima Jogja</h3>
                                <p class="testimonial">
                                    "Saya sangat puas dengan
                                    <br> service yang diberikan.
                                    <br> Very Recommended!"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Pasar Kembang
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonial-2.png" alt="User"
                                class="mb-4 rounded-circle">
                                <h3>Omen Tasik</h3>
                                <p class="testimonial">
                                    "Puass… puass… puas…
                                    <br> Ga nyesel deh pokoknya.
                                    <br> Ketagihan.."
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Apollo
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testimonial-3.png" alt="User"
                                class="mb-4 rounded-circle">
                                <h3>Deddy</h3>
                                <p class="testimonial">
                                    "Kalian harus mencobanya,
                                    <br> Smart People!"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Bekasi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4
                        mt-4 mx-1">
                        I need help
                        </a>
                        <a href="{{route('register')}}" class="btn btn-get-started px-4
                        mt-4 mx-1">
                        Get Started
                        </a>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection