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
                      <h1 class="title-details font-weight-bold">Who is Going?</h1>
                      <p class="sub-title-details text-muted font-weight-normal">Trip to Bromo, Malang, Indonesia</p>
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
                                  <tr>
                                      <td>
                                          <img src="{{ url("assets/img/avatar.png") }}" alt="" height="60" />
                                      </td>
                                      <td class="align-middle">John Doe</td>
                                      <td class="align-middle">EN</td>
                                      <td class="align-middle">N/A</td>
                                      <td class="align-middle">Active</td>
                                      <td class="align-middle">
                                          <a href="#">
                                              <img src="{{ url("assets/img/ic_remove.png") }}" alt="" />
                                          </a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <img src="{{ url("assets/img/avatar.png") }}" alt="" height="60" />
                                      </td>
                                      <td class="align-middle">Parkash Lohana</td>
                                      <td class="align-middle">SG</td>
                                      <td class="align-middle">30 Days</td>
                                      <td class="align-middle">Active</td>
                                      <td class="align-middle">
                                          <a href="#">
                                              <img src="{{ url("assets/img/ic_remove.png") }}" alt="" />
                                          </a>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                          <div class="member mt-3">
                              <h2>Add Member</h2>
                              <form class="form-inline">
                                  <label class="sr-only" for="inputUsername">Name</label>
                                  <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username" />

                                  <label class="sr-only" class="mr-2" for="inlineFormCustomSelectPref">Preference</label>
                                  <select class="custom-select mb-2 mr-sm-2" id="inlineFormCustomSelectPref">
                                      <option selected value="">VISA</option>
                                      <option value="2">30 Days</option>
                                      <option value="3">N/A</option>
                                  </select>

                                  <label class="sr-only" for="doePassport">DOE Passport</label>
                                  <div class="input-group mb-2 mr-sm-2">
                                      <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport" />
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
                              <td class="font-weight-light text-right text-muted">2 person</td>
                          </tr>
                          <tr>
                              <td>Additional Visa</td>
                              <td class="font-weight-light text-right text-muted">$ 190,00</td>
                          </tr>
                          <tr>
                              <td>Trip Price</td>
                              <td class="font-weight-light text-right text-muted">$ 80,00 / person</td>
                          </tr>
                          <tr>
                              <td>Sub Total</td>
                              <td class="font-weight-light text-right text-muted">$ 280,00</td>
                          </tr>
                          <tr>
                              <td>Total (+Unique)</td>
                              <td class="font-weight-light text-right text-total">
                                  <span class="text-blue">$ 279,</span><span class="text-orange">33</span>
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
                  <a href="success.html" class="btn btn-block btn-primary waves-effect">I Have Made Payment</a>
                  <div class="text-center mt-3">
                      <a href="details.html" class="text-muted">Cancel Booking</a>
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
        format: 'dd-mm-yyyy',
        icons: {
          rightIcon: '<img src="{{ url("assets/img/ic_doe.png") }}" alt="" />'
        }
      });
    });
  </script>
@endpush
