@extends('layouts.checkout')

@section('title', 'Checkout Nomads Travel')

@section('content')
<main>
  <!-- START:bg -->
  <section class="section-details-header"></section>
  <!-- START:bg -->

  <section class="section-details-content">
    <div class="container">
      <!-- Start: Breadcrumb -->
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Paket Travel</li>
              <li class="breadcrumb-item">Details</li>
              <li class="breadcrumb-item active">Checkout</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- End: Breadcrumb -->
      <div class="row">
        <!-- START: Bagian Kiri -->
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
            <h1>What is Going?</h1>
            <p>Trip to Ubud, Bali, Indonesia</p>
            <div class="attendee">
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
                      <img
                        src="{{url('./frontend/images/member-6.jpg')}}"
                        height="60"
                        class="image-avatar"
                      />
                    </td>
                    <td class="align-middle">Ari Sutarman</td>
                    <td class="align-middle">ID</td>
                    <td class="align-middle">N/A</td>
                    <td class="align-middle">Active</td>
                    <td class="align-middle">
                      <a href="#"
                        ><img src="{{url('./frontend/images/ic-delete.jpg')}}" alt=""
                      /></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        src="{{ url('./frontend/images/member-2.jpg')}}"
                        height="60"
                        class="image-avatar"
                      />
                    </td>
                    <td class="align-middle">Galih Pratomo</td>
                    <td class="align-middle">SG</td>
                    <td class="align-middle">30 Days</td>
                    <td class="align-middle">Active</td>
                    <td class="align-middle">
                      <a href="#"
                        ><img src="{{url('./frontend/images/ic-delete.jpg')}}" alt=""
                      /></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="member mt-3">
              <h2>Add Member</h2>
              <form class="form-inline">
                <!-- start: input username -->
                <label for="inputUsername" class="sr-only"> Name </label>
                <input
                  type="text"
                  name="inputUsername"
                  class="form-control mb-2 mr-sm-2"
                  id="inputUsername"
                  placeholder="Username"
                />
                <!-- end: input username -->
                <!-- start: input visa -->
                <label for="inputVisa" class="sr-only">Visa</label>
                <select
                  name="inputVisa"
                  id="inputVisa"
                  class="custom-select mb-2 mr-sm-2"
                >
                  <option value="VISA" selected>VISA</option>
                  <option value="30 Days">30 Days</option>
                  <option value="N/A">N/A</option>
                </select>

                <label for=doePassport" class="sr-only">DOE Passport</label>
                <div class="input-group mb-2 mr-sm-2">
                  <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                </div>

                <button type="submit" class="btn btn-add-now mb-2 px-4">
                  Add Now
                </button>
                <!-- end: input visa -->
              </form>
              <h3 class="mt-2 mb-0">Note</h3>
              <p class="disclaimer">You are only able to invite member that has registered in Nomads.</p>
            </div>
          </div>
        </div>
        <!-- END: Bagian Kiri -->
        <!-- START: Bagian Kanan -->
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Checkout Information</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Members</th>
                <td width="50%" class="text-right">2 Person</td>
              </tr>
              <tr>
                <th width="50%">Additional Visa</th>
                <td width="50%" class="text-right">$190,00</td>
              </tr>
              <tr>
                <th width="50%">Trip Price</th>
                <td width="50%" class="text-right">$80,00 / person</td>
              </tr>
              <tr>
                <th width="50%">Sub Total</th>
                <td width="50%" class="text-right">$280,00</td>
              </tr>
              <tr>
                <th width="50%">Total(+Unique)</th>
                <td width="50%" class="text-right text-total">
                  <span class="text-blue">$279,</span><span class="text-orange">33</span>
                </td>
              </tr>
            </table>
            <hr />
            <h2>Payment Instructions</h2>
            <p class="payment-instructions">Please complete payment before you 
              continue the wonderful trip</p>
            <div class="bank">
              <div class="bank-item pb-3">
                <img src="{{url('./frontend/images/ic_bank.jpg')}}" alt="bank 1" class="bank-image">
                <div class="description">
                  <h3>PT Nomads ID</h3>
                  <p>0811 8294 2109<br/>Bank Central Asia</p>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="bank-item pb-3">
                <img src="{{ url('./frontend/images/ic_bank.jpg')}}" alt="bank 1" class="bank-image">
                <div class="description">
                  <h3>PT Nomads ID</h3>
                  <p>6718 2103 7182<br/>Bank HSBC</p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="join-container">
            <a href="{{route('checkout-success')}}" class="btn btn-block btn-join-now mt-3 py-2"
              >I Have Made Payment</a
            >
          </div>
          <div class="text-center mt-3">
            <a href="{{route('detail')}}" class="text-muted">
              Cancel Booking
            </a>
          </div>
        </div>
        <!-- END: Bagian Kanan -->
      </div>
    </div>
  </section>
</main>
@endsection

@push('prepend-style')
<link
      rel="stylesheet"
      href="{{url('./frontend/libraries/gijgo/css/gijgo.min.css')}}"
    />
@endpush

@push('addon-script')
<script src="{{ url('./frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
  $(document).ready(function () {
    $(".datepicker").datepicker({
      uiLibrary: "bootstrap4",
      icons: {
        rightIcon: '<img src="{{url('./frontend/images/ic_doe.jpg')}}" />',
      },
    });
  });
</script>
@endpush