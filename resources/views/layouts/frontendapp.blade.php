<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Wahana PM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    {{-- <link href="/assets/frontend/img/favicon.png" rel="icon">
    <link href="/assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/frontend/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Wahana PM</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('index') }}#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#about">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#wahana">Wahana</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#tiket">Tiket</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#contact">Contact</a></li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                    @else
                        <li><a class="nav-link scrollto" href="{{ route('pesanan.saya') }}">Tiket Saya</a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"
                                    style="color: black;">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    {{-- <li><a class="getstarted scrollto" href="#about">Login</a></li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer">
        {{-- <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Arsha</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Wahana</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/frontend/vendor/aos/aos.js"></script>
    <script src="/assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/frontend/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/frontend/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/assets/frontend/vendor/php-email-form/validate.js"></script>

    {{-- midtrans js --}}
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-YHAhBNd0hBkEssCy"></script>

    {{-- wheaterbit api --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const apiKey = '94bdcf33b08c4adc847eef327032a91f'; // Ganti dengan API Key Anda
            const lat = '-0.94738'; //latitude
            const lon = '100.35200'; // longitude
            const lang = 'id'; // bahasa
            const url = `https://api.weatherbit.io/v2.0/current?key=${apiKey}&lang=${lang}&lat=${lat}&lon=${lon}`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    const weatherData = data.data[0];
                    const weatherElement = document.getElementById('weather');
                    const iconCode = weatherData.weather.icon;
                    
                    weatherElement.innerHTML = `
                        <img src="https://www.weatherbit.io/static/img/icons/${iconCode}.png" alt="Weather Icon">
                        <p><strong>City:</strong> ${weatherData.city_name}</p>
                        <p><strong>Temperature:</strong> ${weatherData.temp} °C</p>
                        <p><strong>Weather:</strong> ${weatherData.weather.description}</p>
                        <p><strong>Wind Speed:</strong> ${weatherData.wind_spd} m/s</p>
                        <p><strong>Humidity:</strong> ${weatherData.rh} %</p>
                    `;
                })
                .catch(error => {
                    console.error('Error fetching the weather data:', error);
                });
        });
    </script>

    <!-- Template Main JS File -->
    <script src="/assets/frontend/js/main.js"></script>

</body>

</html>
