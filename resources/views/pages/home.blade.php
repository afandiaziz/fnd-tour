@extends('layouts.app')
@section('title', 'Fnd Tour - Cari paket Travel & Umrah murah dengan kustomisasi dengan pelayanan terbaik')

@section('content')
<div class="jumbotron text-center">
    <div class="container">
        <h1>Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit.</h1>
        <p class="mt-3">Sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua</p>
        <a class="btn btn-primary px-4 mt-4 waves-effect" href="#popular" role="button">Get Started</a>
    </div>
</div>
<main>
    <div class="container">
        <section class="row sections-stats justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>
    <section class="section-popular">
        <section class="section-popular-heading" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section">
                        <h2 class="title-section">Popular Travel</h2>
                        <p class="sub-title-section">Something that you never try <br> before in this world</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popular">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($items as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
                        <div class="card-travel d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : null }}');">
                            <div class="travel-country text-uppercase">{{ $item->location }}</div>
                            <div class="travel-location text-uppercase">{{ $item->title }}</div>
                            <div class="travel-btn mt-auto">
                                <a href="{{ url('detail', $item->slug) }}" class="btn btn-primary waves-effect px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
                        <div class="card-travel d-flex flex-column" style="background-image: url('assets/img/popular-2.jpg');">
                            <div class="travel-country text-uppercase">INDONESIA</div>
                            <div class="travel-location text-uppercase">BROMO, MALANG</div>
                            <div class="travel-btn mt-auto">
                                <a href="{{ url('detail') }}" class="btn btn-primary waves-effect px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
                        <div class="card-travel d-flex flex-column" style="background-image: url('assets/img/popular-3.jpg');">
                            <div class="travel-country text-uppercase">INDONESIA</div>
                            <div class="travel-location text-uppercase">MAGELANG  </div>
                            <div class="travel-btn mt-auto">
                                <a href="{{ url('detail') }}" class="btn btn-primary waves-effect px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-center">
                        <div class="card-travel d-flex flex-column" style="background-image: url('assets/img/popular-4.jpg');">
                            <div class="travel-country text-uppercase">DUBAI</div>
                            <div class="travel-location text-uppercase">MIDDLE EAST</div>
                            <div class="travel-btn mt-auto">
                                <a href="{{ url('detail') }}" class="btn btn-primary waves-effect px-4">View Details</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </section>
    
    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="title-section">Our Networks</h2>
                    <p class="sub-title-section">Companies are trusted us <br> more than just a trip</p>
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-center text-center align-middle">
                        <div class="col my-lg-4 my-md-3 my-sm-4 my-4">
                            <img src="assets/img/ana.png" alt="partner fndtour - ana">
                        </div>
                        <div class="col my-lg-4 my-md-3 my-sm-4 my-4">
                            <img src="assets/img/disney.png" alt="partner fndtour - disney">
                        </div>
                        <div class="col my-lg-4 my-md-3 my-sm-4 my-4">
                            <img src="assets/img/visa.png" alt="partner fndtour - visa">
                        </div>
                        <div class="col my-lg-4 my-md-3 my-sm-4 my-4">
                            <img src="assets/img/shangri-la.png" alt="partner fndtour - shangri-la">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-testimonial-heading" id="testimonial-heading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="title-section">They Are Loving Us</h2>
                    <p class="sub-title-section">Moments were giving them <br>the best experience</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-testimonials" id="testimonials">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="assets/img/avatar.png" class="mb-4 rounded-circle" alt="user testimonial fndtour">
                            <h3 class="mb-4 font-weight-bold">John Doe</h3>
                            <p>
                                “ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligulaeget dolor. “
                            </p>
                        </div>
                        <div class="card-footer align-middle">
                            Trip to Bromo
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="assets/img/avatar.png" class="mb-4 rounded-circle" alt="user testimonial fndtour">
                            <h3 class="mb-4 font-weight-bold">Shabrina</h3>
                            <p>
                                “ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligulaeget dolor. “
                            </p>
                        </div>
                        <div class="card-footer align-middle">
                            Trip to Bali
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="assets/img/avatar.png" class="mb-4 rounded-circle" alt="user testimonial fndtour">
                            <h3 class="mb-4 font-weight-bold">Lisa</h3>
                            <p>
                                “ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligulaeget dolor. “
                            </p>
                        </div>
                        <div class="card-footer align-middle">
                            Trip to Dubai
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5">
                    <a href="javascript:void(0)" class="btn btn-help waves-effect px-4 font-weight-normal mx-2   ">I Need Help</a> 
                    <a href="{{ route('register') }}" class="btn btn-primary waves-effect px-4 font-weight-bold mx-2">Get Started</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
