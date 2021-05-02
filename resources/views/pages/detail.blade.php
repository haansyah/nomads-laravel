@extends('layouts.app')
@section('title', 'Detail Travel')

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
                <li class="breadcrumb-item active">Details</li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- End: Breadcrumb -->
        <div class="row">
          <!-- START: Bagian Kiri -->
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Bromo Malang</h1>
              <p>Republic of Indonesia</p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img
                    src="./frontend/images/details.jpg"
                    class="xzoom"
                    id="xzoom-default"
                    alt=""
                    xoriginal="./frontend/images/details.jpg"
                  />
                </div>
                <div class="xzoom-thumbs">
                  <a href="./frontend/images/details.jpg">
                    <img
                      src="./frontend/images/details.jpg"
                      class="xzoom-gallery"
                      width="128"
                      xpreview="./frontend/images/details.jpg"
                      alt=""
                    />
                  </a>
                  <a href="./frontend/images/thumb-1.jpg">
                    <img
                      src="./frontend/images/thumb-1.jpg"
                      class="xzoom-gallery"
                      width="128"
                      xpreview="./frontend/images/thumb-1.jpg"
                      alt=""
                    />
                  </a>
                  <a href="./frontend/images/thumb-2.jpg">
                    <img
                      src="./frontend/images/thumb-2.jpg"
                      class="xzoom-gallery"
                      width="128"
                      xpreview="./frontend/images/thumb-2.jpg"
                      alt=""
                    />
                  </a>
                  <a href="./frontend/images/thumb-3.jpg">
                    <img
                      src="./frontend/images/thumb-3.jpg"
                      class="xzoom-gallery"
                      width="128"
                      xpreview="./frontend/images/thumb-3.jpg"
                      alt=""
                    />
                  </a>
                  <a href="./frontend/images/thumb-4.jpg">
                    <img
                      src="./frontend/images/thumb-4.jpg"
                      class="xzoom-gallery"
                      width="128"
                      xpreview="./frontend/images/thumb-4.jpg"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <h2>Tentang Wisata</h2>
              <p>
                Nusa Penida adalah sebuah pulau bagian dari negara Republik
                Indonesia yang terletak di sebelah tenggara Bali yang
                dipisahkan oleh Selat Badung. Di dekat pulau ini terdapat juga
                pulau-pulau kecil lainnya yaitu Nusa Ceningan
              </p>
              <p>
                Perbukitan dan kapur karang merupakan kondisi tanah di pulau
                ini, salah satunya gunung bukit tertinggi bernama Gunung
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <img
                    src="frontend/images/ic_event.jpg"
                    alt=""
                    class="features-image"
                  />
                  <div class="description">
                    <h3>Featured Event</h3>
                    <p>Tari Kecak</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <img
                    src="frontend/images/ic_bahasa.jpg"
                    alt=""
                    class="features-image"
                  />
                  <div class="description">
                    <h3>Language</h3>
                    <p>Bahasa Indonesia</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <img
                    src="frontend/images/ic_food.jpg"
                    alt=""
                    class="features-image"
                  />
                  <div class="description">
                    <h3>Foods</h3>
                    <p>Local Foods</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END: Bagian Kiri -->
          <!-- START: Bagian Kanan -->
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members Are Going</h2>
              <div class="members my-2">
                <img
                  src="./frontend/images/member-1.jpg"
                  alt=""
                  class="member-image mr-1"
                />
                <img
                  src="./frontend/images/member-2.jpg"
                  alt=""
                  class="member-image mr-1"
                />
                <img
                  src="./frontend/images/member-3.jpg"
                  alt=""
                  class="member-image mr-1"
                />
                <img
                  src="./frontend/images/member-4.jpg"
                  alt=""
                  class="member-image mr-1"
                />
                <img
                  src="./frontend/images/member-5.jpg"
                  alt=""
                  class="member-image mr-1"
                />
              </div>
              <hr />
              <h2>Trip Information</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Date of Departure</th>
                  <td width="50%" class="text-right">22 Aug, 2019</td>
                </tr>
                <tr>
                  <th width="50%">Duration</th>
                  <td width="50%" class="text-right">4D, 3N</td>
                </tr>
                <tr>
                  <th width="50%">Type</th>
                  <td width="50%" class="text-right">Open Trip</td>
                </tr>
                <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">$80,00 / person</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a
                href="{{route('checkout')}}"
                class="btn btn-block btn-join-now mt-3 py-2"
                >Join Now</a
              >
            </div>
          </div>
          <!-- END: Bagian Kanan -->
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('./frontend/libraries/xzoom/xzoom.css') }}" />
@endpush

@push('addon-script')
<script src="{{ url('./frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
  $(document).ready(function () {
    $(".xzoom, .xzoom-gallery").xzoom({
      zoomWidth: 500,
      title: false,
      tint: "#333",
      Xoffset: 15,
    });
  });
</script>
@endpush