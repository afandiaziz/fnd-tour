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
                        <h1 class="title-details font-weight-bold">Mount Bromo</h1>
                        <p class="sub-title-details">Indonesia</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img class="xzoom5 w-100" id="xzoom-magnific" src="{{ url('assets/img/pic_featured.jpg') }}"
                                    xoriginal="{{ url('assets/img/pic_featured.jpg') }}" />
                                <div class="xzoom-thumbs">
                                    <a href="{{ url('assets/img/pic_featured.jpg') }}"><img class="xzoom-gallery5" width="120" src="{{ url('assets/img/pic_featured.jpg') }}" xpreview="{{ url('assets/img/pic_featured.jpg') }}"></a>
                                    <a href="{{ url('assets/img/pic_featured.jpg') }}"><img class="xzoom-gallery5" width="120" src="{{ url('assets/img/pic_featured.jpg') }}" xpreview="{{ url('assets/img/pic_featured.jpg') }}"></a>
                                    <a href="{{ url('assets/img/pic_featured.jpg') }}"><img class="xzoom-gallery5" width="120" src="{{ url('assets/img/pic_featured.jpg') }}" xpreview="{{ url('assets/img/pic_featured.jpg') }}"></a>
                                    <a href="{{ url('assets/img/pic_featured.jpg') }}"><img class="xzoom-gallery5" width="120" src="{{ url('assets/img/pic_featured.jpg') }}" xpreview="{{ url('assets/img/pic_featured.jpg') }}"></a>
                                    <a href="{{ url('assets/img/pic_featured.jpg') }}"><img class="xzoom-gallery5" width="120" src="{{ url('assets/img/pic_featured.jpg') }}" xpreview="{{ url('assets/img/pic_featured.jpg') }}"></a>
                                </div>
                            </div>
                        </div>
                        <h2>About Travel</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ornare dui massa. Vestibulum
                            sollicitudin elementum mauris, a vulputate metus aliquam quis. Phasellus non turpis mauris.
                            Sed dictum odio erat, non accumsan erat finibus eu. Curabitur odio odio, convallis vel
                            aliquet rhoncus, tempus in eros. Ut et scelerisque quam, a sodales neque. Ut id ullamcorper
                            ipsum. Fusce malesuada accumsan nibh, quis dictum dui lobortis ut. Cras eget malesuada est.
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ornare dui massa. Vestibulum
                            sollicitudin elementum mauris, a vulputate metus aliquam quis. Phasellus non turpis mauris.
                            Sed dictum odio erat, non accumsan erat finibus eu. Curabitur odio odio, convallis vel
                            aliquet rhoncus, tempus in eros. Ut et scelerisque quam, a sodales neque. Ut id ullamcorper
                            ipsum. Fusce malesuada accumsan nibh, quis dictum dui lobortis ut. Cras eget malesuada est.
                        </p>
                        <div class="row features">
                            <div class="col-md-4">
                                <div class="description">
                                    <img src="{{ url('assets/img/ic_event.jpg') }}" alt="features travel - Event ">
                                    <div class="description">
                                        <h4>Featured Event</h4>
                                        <p>Sunrise</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left border-right">
                                <div class="description">
                                    <img src="{{ url('assets/img/ic_language.jpg') }}" alt="features travel - Language ">
                                    <div class="description">
                                        <h4>Language</h4>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="description">
                                    <img src="{{ url('assets/img/ic_foods.jpg') }}" alt="features travel - Foods ">
                                    <div class="description">
                                        <h4>Foods</h4>
                                        <p>Local Foods</p>
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
                                    <td class="text-right text-muted">19 Jul 2019</td>
                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td class="text-right text-muted">3D 2N</td>
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    <td class="text-right text-muted">Open</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td class="text-right text-muted">$60.00 / person</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <a href="{{ url('checkout') }}" class="btn btn-block btn-primary waves-effect">Join Now</a>
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
