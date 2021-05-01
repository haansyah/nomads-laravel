<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <link
      rel="stylesheet"
      href="{{ url('./frontend/libraries/bootstrap/css/bootstrap.css')}}"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ url('./frontend/styles/main.css') }}" />
  </head>
  <body>
    <!-- START : NAVBAR -->
    <div class="container">
      <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="#" class="navbar-brand">
          <img src="./frontend/images/logo.png" alt="Logo Nomads" />
        </a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navb"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
              <a href="#" class="nav-link active">Home</a>
            </li>
            <li class="nav-item mx-md-2">
              <a href="#" class="nav-link">Paket Travel</a>
            </li>
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                id="navbardrop"
                data-toggle="dropdown"
                >Services</a
              >
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Travel</a>
                <a href="#" class="dropdown-item">Hotels</a>
                <a href="#" class="dropdown-item">Gallery</a>
              </div>
            </li>
            <li class="nav-item mx-md-2">
              <a href="#" class="nav-link">Testimonial</a>
            </li>
          </ul>
          <!-- Mobile Button -->
          <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0">Masuk</button>
          </form>

          <!-- Desktop Button -->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
              Masuk
            </button>
          </form>
        </div>
      </nav>
    </div>
    <!-- END : NAVBAR -->

    @yield('content')

    <footer class="section-footer mt-5 mb-4 border-top">
      <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-12 col-lg-3 col-sm-6">
                <h5>FEATURES</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Community</a></li>
                  <li><a href="#">Social Media Kit</a></li>
                  <li><a href="#">Affiliate</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3 col-sm-6">
                <h5>ACCOUNT</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Refund</a></li>
                  <li><a href="#">Security</a></li>
                  <li><a href="#">Reward</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3 col-sm-6">
                <h5>COMPANY</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Career</a></li>
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Media</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3 col-sm-6">
                <h5>GET CONNECTED</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Depok</a></li>
                  <li><a href="#">Indonesia</a></li>
                  <li><a href="#">0812 - 9911 - 5053</a></li>
                  <li><a href="#">m@nomads.com</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div
          class="row border-top justify-content-center align-items-center pt-4"
        >
          <div class="col-auto text-gray-500 font-weight-light">
            2020 Copyrights Nomads . All Rights Reserved . Made in Jakarta
          </div>
        </div>
      </div>
    </footer>

    <script src=" {{url('./frontend/libraries/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src=" {{url('./frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>
    <script src=" {{url('./frontend/libraries/retina/retina.min.js')}}"></script>
  </body>
</html>
