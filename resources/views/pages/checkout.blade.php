@extends('layouts.checkout')
@section('title', 'Checkout')
@section('content')
<main>
    <section class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-12 p-sm-0">
                    <nav aria-label="breadcrumb" class="pl-0">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Travel Package</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Details</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <h1 class="title-details font-weight-bold">Who is Going?</h1>
                        <p class="sub-title-details text-muted font-weight-normal">Trip to {{ $item->travel_package->title }}, {{ $item->travel_package->title }}</p>
                        <div class="table-responsive border-0">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>Visa</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($item->details as $detail)
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="https://ui-avatars.com/api/?name={{ $detail->username }}" alt="" height="60" />
                                        </td>
                                        <td class="align-middle">{{ $detail->username }}</td>
                                        <td class="align-middle">{{ $detail->nationality }}</td>
                                        <td class="align-middle">{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                                        <td class="align-middle">{{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Not Active' }}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('checkout-remove', $detail->id) }}">
                                                <img src="{{ url("assets/img/ic_remove.png") }}" alt="" />
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No Visitor</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline" method="POST" action="{{ route('checkout-create', $item->id) }}">
                                    @csrf
                                    <label class="sr-only" for="inputUsername">Name</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername" name="username" placeholder="Username" />
                                    
                                    <label for="nationality" class="sr-only">Nationality</label>
                                    <input type="text" name="nationality" class="form-control mb-2 mr-sm-2" style="width: 50px;" id="inputNationality" placeholder="Nationality" />

                                    <label class="sr-only" class="mr-2" for="inlineFormCustomSelectPref">Preference</label>
                                    <select class="custom-select mb-2 mr-sm-2" name="is_visa" id="inlineFormCustomSelectPref">
                                        <option selected value="">VISA</option>
                                        <option value="1">30 Days</option>
                                        <option value="0">N/A</option>
                                    </select>
                                    
                                    <label class="sr-only" for="doePassport">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" name="doe_passport" class="form-control datepicker" id="doePassport" placeholder="DOE Passport" />
                                    </div>
                                    <button type="submit" class="btn btn-add-now mb-2 px-4 waves-effect waves-light">Add Now</button>
                                </form>
                                <h3 class="mt-2 mb-0 small font-weight-bold">Note</h3>
                                <small class="note-checkout mb-0 text-muted font-weight-lighter">
                                    You are only able to invite member that has registered in FNDTour.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-lg-0 mt-4 pr-lg-0" id="payment-instruction">
                    <div class="card card-details card-right mt-0">
                        <h2 class="mt-0 font-weight-normal">Checkout Information</h2>
                        <table class="trip-informations table table-borderless w-100 table-sm">
                            <tr>
                                <td>Members</td>
                                <td class="font-weight-light text-right text-muted">
                                    {{ $item->details->count() }} person
                                </td>
                            </tr>
                            <tr>
                                <td>Additional Visa</td>
                                <td class="font-weight-light text-right text-muted">$ {{ $item->additional_visa }},00</td>
                            </tr>
                            <tr>
                                <td>Trip Price</td>
                                <td class="font-weight-light text-right text-muted">$ {{ $item->travel_package->price }},00 / person</td>
                            </tr>
                            <tr>
                                <td>Sub Total</td>
                                <td class="font-weight-light text-right text-muted">$ {{ $item->transaction_total }},00</td>
                            </tr>
                            <tr>
                                <td>Total (+Unique)</td>
                                <td class="font-weight-light text-right text-total">
                                    <span class="text-blue">$ {{ $item->transaction_total }},</span>
                                    <span class="text-orange">{{ rand(0,99) }}</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h2 class="mt-0 font-weight-normal">Payment Instructions</h2>
                        <small class=" font-weight-light mb-3">Please complete your payment before to continue the wonderful trip</small>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{ url("assets/img/ic_bank.png") }}" alt="" class="bank-image" />
                                <div class="description">  
                                    <h3>PT FNDTour</h3>
                                    <p>
                                        157 00 058458 68
                                        <br />
                                        Bank Central Asia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-item">
                                <img src="{{ url("assets/img/ic_bank.png") }}" alt="" class="bank-image" />
                                <div class="description">
                                    <h3>PT FNDTour</h3>
                                    <p>
                                        200 5642156 4252
                                        <br />
                                        Bank Mandiri
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-primary waves-effect"> I Have Made Payment </a>
                    <div class="text-center mt-3">
                        <a href="{{ route('detail', $item->travel_package->slug) }}" class="text-muted"> Cancel Booking </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('assets/css/gijgo.min.css') }}" />
@endpush

@push('addon-script')
<script src="{{ url('assets/js/gijgo.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd',
            icons: {
                rightIcon: '<img src="{{ url("assets/img/ic_doe.png") }}" alt="" />'
            }
        });
    });
</script>
@endpush
