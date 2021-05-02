@extends('layouts.app')

@section('title', 'NOMADS - Home')

@section('content')
  <!-- START : HEADER -->
  <header class="text-center">
    <h1>
      Explore The Beautiful World
      <br />
      As Easy One Click
    </h1>
    <p class="mt-3">
      You will see Beautiful<br />moment you never seen before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4"> Get Started </a>
  </header>
  <!-- END : HEADER -->

  <main>
    <!-- START: Statistik Header -->
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
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
    <!-- END : Statistik Header -->

    <!-- START: Section Popular -->
    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>Something that you never try<br />before in this world</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END: Section Popular -->

    <!-- START: Section Popular Content -->
    <section class="section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div
              class="card-travel text-center d-flex flex-column"
              style="background-image: url('./frontend/images/popular-1.jpg')"
            >
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DERATAN, BALI</div>
              <div class="travel-button mt-auto">
                <a href="{{url('/detail')}}" class="btn btn-travel-details px-4"
                  >View Details</a
                >
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div
              class="card-travel text-center d-flex flex-column"
              style="background-image: url('./frontend/images/popular-2.jpg')"
            >
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BROMO, MALANG</div>
              <div class="travel-button mt-auto">
                <a href="{{url('/detail')}}" class="btn btn-travel-details px-4"
                  >View Details</a
                >
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div
              class="card-travel text-center d-flex flex-column"
              style="background-image: url('./frontend/images/popular-3.jpg')"
            >
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">LOMBOK, NTB</div>
              <div class="travel-button mt-auto">
                <a href="{{route('detail')}}" class="btn btn-travel-details px-4"
                  >View Details</a
                >
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div
              class="card-travel text-center d-flex flex-column"
              style="background-image: url('./frontend/images/popular-4.jpg')"
            >
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DERATAN, BALI</div>
              <div class="travel-button mt-auto">
                <a href="{{route('detail')}}" class="btn btn-travel-details px-4"
                  >View Details</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END: Section Popular Content -->

    <!-- START: Section Networks -->
    <section class="section-networks" id="networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Network</h2>
            <p>
              Companies are trusted us<br />
              more than just a trip
            </p>
          </div>
          <div class="col-md-8 text-center">
            <img
              src="{{url('./frontend/images/partner.jpg')}}"
              alt="Logo Partnert"
              class="img-partner"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- END: Section Networks -->

    <!-- START:  Section Testimonial Heading-->
    <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>They Are Loving Us</h2>
            <p>
              Moments were giving them<br />
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END:  Section Testimonial-->

    <!-- START:  Section Testimonial Content-->
    <section
      class="section section-testimonial-content"
      id="testimonialContent"
    >
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img
                  src="{{ url('./frontend/images/testimonial-1.jpg')}}"
                  alt="Testimonial"
                  class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Dela Delila</h3>
                <p class="testimonial">
                  "Tripnya Keren banget sih pokoknya harus cobain, Thankkss"
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">Trip to Lombok</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img
                  src="{{url('./frontend/images/testimonial-2.jpg')}}"
                  alt="Testimonial"
                  class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Nagita Slavina</h3>
                <p class="testimonial">
                  "Ga Ngerti lagi dah bener bener KERENNNNN!!"
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">Trip to Raja Ampat</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img
                  src="{{url('./frontend/images/testimonial-3.jpg')}}"
                  alt="Testimonial"
                  class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Angga Resky</h3>
                <p class="testimonial">
                  "i Loved it when the waves was shaking harder, and i was
                  scared too"
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">Trip to Ubud</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
              I Need Help
            </a>
            <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- END:  Section Testimonial Content-->
  </main>
@endsection