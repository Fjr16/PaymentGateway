@extends('layouts.frontendapp')
@section('title', 'Frontend')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                @if ($header)
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                        data-aos="fade-up" data-aos-delay="200">
                        <h1>{{ $header->judul }}</h1>
                        <h2>{{ $header->deskripsi }}</h2>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ url('gambar/header/' . $header->foto) }}" class="img-fluid animated" alt="">
                    </div>
                @endif
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>
                @if ($about)
                    <div class="row content">
                        <div class="col-lg-12">
                            <p>
                                {!! $about->deskripsi !!}
                            </p>

                        </div>

                    </div>
                @endif
            </div>
        </section><!-- End About Us Section -->


        <!-- ======= Team Section ======= -->
        <section id="wahana" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Wahana</h2>
                </div>

                <div class="row">
                    @foreach ($wahanas as $wahana)
                        <div class="col-lg-6 my-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member d-flex align-items-start">
                                <div class="col-12">
                                    <img src="{{ url('gambar/wahana/' . $wahana->foto) }}" alt="" width="100%"
                                        height="300px">
                                    <br>
                                    <br>
                                    <h4>{{ $wahana->nama }}</h4>
                                    <span></span>
                                    <p>{{ $wahana->deskripsi }}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="tiket" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tiket Wahana</h2>
                </div>

                <div class="row">

                    @foreach ($tikets as $tiket)
                        <div class="col-lg-4 my-2" data-aos="fade-up" data-aos-delay="100">
                            <div class="box featured text-center">
                                <h3>{{ $tiket->judul }}</h3>
                                <h4><sup>Rp.</sup>{{ $tiket->harga }}<span>per orang</span></h4>
                                <p>
                                    {{ $tiket->wahana->nama }}
                                </p>

                                @if (auth()->check())
                                    <button type="button" class="buy-btn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $tiket->id }}">
                                        Beli Tiket
                                    </button>
                                @else
                                    <a href="{{ route('login') }}" class="buy-btn">
                                        Beli Tiket
                                    </a>
                                @endif

                            </div>
                        </div>



                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $tiket->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Tiket</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('pesan.tiket', $tiket->id) }}" method="POST">
                                        @csrf
                                        @method('GET')
                                        <div class="modal-body">
                                            <div class="col-12">
                                                <p>Setelah melakukan pemesanan silahkan lakukan pembayaran melalui:</p>
                                                <p>Rekening : BNI</p>
                                                <p>Nomor Rekening : 24564343</p>
                                                <p>Atas Nama : Wahana PM</p>
                                                <div class="form-group">
                                                    <strong>Jumlah Tiket Dipesan</strong>
                                                    <input type="number" name="jumlah" class="form-control my-3"
                                                        placeholder="Jumlah Tiket" required>
                                                </div>
                                                <p>Note: Bukti pembayaran diupload dipesanan saya</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Pesan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>
                @if ($contact)
                    <div class="row">

                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>{{ $contact->lokasi }}</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>{{ $contact->email }}</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>{{ $contact->no_hp }}</p>
                                </div>


                            </div>

                        </div>

                        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <iframe src="{{ $contact->maps }}" frameborder="0"
                                    style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                            </form>
                        </div>

                        <div class="weather-container">
                            <h1>Current Weather</h1>
                            <div id="weather" class="weather-info">
                                <!-- Weather data will be inserted here -->
                            </div>
                        </div>

                    </div>
                @endif
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->


@endsection
