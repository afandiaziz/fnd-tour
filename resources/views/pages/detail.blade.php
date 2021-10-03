@extends('layouts.app')
@section('title', 'Detail Travel')

@push('prepend-style')
<link rel="stylesheet" href="{{ url('assets/css/xzoom.css') }}">
<link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
@endpush

@section('content')
<main>
    <section class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-12 p-sm-0">
                    <nav aria-label="breadcrumb" class="pl-0">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Travel Package</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="section-details-content">
        <div class="container">
            <div class="row" id="details-content">
                <div class="col-12 col-lg-8 pl-lg-0">
                    <div class="card">
                        <h1 class="title-details font-weight-bold">{{ $item->title }}</h1>
                        <p class="sub-title-details">{{ $item->location }}</p>
                        @if ($item->galleries->count())
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img class="xzoom5 w-100" id="xzoom-magnific" src="{{ Storage::url($item->galleries->first()->image) }}"
                                    xoriginal="{{ Storage::url($item->galleries->first()->image) }}" />
                                <div class="xzoom-thumbs">
                                    @foreach ($item->galleries as $gallery)
                                    <a href="{{ Storage::url($gallery->image) }}"><img class="xzoom-gallery5" width="120" src="{{ Storage::url($gallery->image) }}" xpreview="{{ Storage::url($gallery->image) }}"></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                        <h2>About Travel</h2>
                        <p>{!! $item->about !!} </p>
                        <div class="row features">
                            <div class="col-md-4">
                                <div class="description">
                                    <img src="{{ url('assets/img/ic_event.jpg') }}" alt="features travel - Event ">
                                    <div class="description">
                                        <h4>Featured Event</h4>
                                        <p>{{ $item->featured_event }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left border-right">
                                <div class="description">
                                    <img src="{{ url('assets/img/ic_language.jpg') }}" alt="features travel - Language ">
                                    <div class="description">
                                        <h4>Language</h4>
                                        <p>{{ $item->language }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="description">
                                    <img src="{{ url('assets/img/ic_foods.jpg') }}" alt="features travel - Foods ">
                                    <div class="description">
                                        <h4>Foods</h4>
                                        <p>{{ $item->foods }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-lg-0 mt-4 pr-lg-0" id="trip-information">
                    <div class="card">
                        <h2 class="mt-0">Members are going</h2>
                        <div class="members py-2">
                            <img src="{{ url('assets/img/avatar.png') }}" class="mb-2 rounded-circle member-pic mr-1"
                                alt="members travel mount bromo">
                            <img src="{{ url('assets/img/avatar.png') }}" class="mb-2 rounded-circle member-pic mr-1"
                                alt="members travel mount bromo">
                            <img src="{{ url('assets/img/avatar.png') }}" class="mb-2 rounded-circle member-pic mr-1"
                                alt="members travel mount bromo">
                            <img src="{{ url('assets/img/avatar.png') }}" class="mb-2 rounded-circle member-pic mr-1"
                                alt="members travel mount bromo">
                            <img src="{{ url('assets/img/avatar.png') }}" class="mb-2 rounded-circle member-pic mr-1"
                                alt="members travel mount bromo">
                            <img src="{{ url('assets/img/member-more.png') }}" class="mb-2 rounded-circle member-pic mr-1"
                                alt="members travel mount bromo">
                        </div>
                        <hr>
                        <h2 class="mt-0">Trip Information</h2>
                        <div class="table-responsive">
                            <table class="table table-sm table-borderless w-100">
                                <tr>
                                    <td>Date of Departure</td>
                                    <td class="text-right text-muted">{{ \Carbon\Carbon::create($item->date_of_departure)->format(' ') }}</td>
                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td class="text-right text-muted">{{ $item->duration }}</td>
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    <td class="text-right text-muted">{{ $item->type }}</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td class="text-right text-muted">${{ $item->price }},00 / person</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    @auth
                    <form action="" method="post">
                        @csrf
                        <button class="btn btn-block btn-primary waves-effect" type="submit">Join Now</button>
                    </form>
                    @endauth
                    @guest
                    <a href="{{ route('login') }}" class="btn btn-block btn-primary waves-effect">Login or Register to Join</a>
                    @endguest
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


@push('addon-script')
<script src="{{ url('assets/js/xzoom.min.js') }}"></script>
<script src="{{ url('assets/js/magnific-popup.js') }}"></script>
<script>
    (function ($) {
        $(document).ready(function() {
            $('.xzoom5, .xzoom-gallery5').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });

            //Integration with hammer.js
            var isTouchSupported = 'ontouchstart' in window;

            if (isTouchSupported) {
                //If touch device
                $('.xzoom5').each(function(){
                    var xzoom = $(this).data('xzoom');
                    xzoom.eventunbind();
                });

                $('.xzoom5').each(function() {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1, ls;

                        xzoom.eventmove = function(element) {
                            element.hammer().on('drag', function(event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        var counter = 0;
                        xzoom.eventclick = function(element) {
                            element.hammer().on('tap', function() {
                                counter++;
                                if (counter == 1) setTimeout(openmagnific,300);
                                event.gesture.preventDefault();
                            });
                        }

                        function openmagnific() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                var gallery = xzoom.gallery().cgallery;
                                var i, images = new Array();
                                for (i in gallery) {
                                    images[i] = {src: gallery[i]};
                                }
                                $.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }
                        xzoom.openzoom(event);
                    });
                });

            } else {
                //Integration with magnific popup plugin
                $('#xzoom-magnific').bind('click', function(event) {
                    var xzoom = $(this).data('xzoom');
                    xzoom.closezoom();
                    var gallery = xzoom.gallery().cgallery;
                    var i, images = new Array();
                    for (i in gallery) {
                        images[i] = {src: gallery[i]};
                    }
                    $.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});
                    event.preventDefault();
                });
            }
        });
    })(jQuery);
</script>
@endpush
