@extends('landingpage.layout')
@section('content')

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active" style="background-image: url('assets/img/slide/slide-1.jpeg')">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Selamat Datang di Nagara Puntang
                        </h2>
                        <p class="animate__animated animate__fadeInUp">Rasakan ketenangan dan keindahan alam di Nagara Puntang, tempat di mana keajaiban alam bertemu dengan sejarah yang kaya. Gunung Puntang menawarkan pemandangan pegunungan yang indah dan udara segar yang menenangkan. Jelajahi petualangan menarik dan ciptakan kenangan berharga di surga tersembunyi Bandung ini. Terletak di Kampung Pasir Panjang, Desa Campakamulya, Kecamatan Cimaung, Kabupaten Bandung, Gunung Puntang memiliki ketinggian 2.224 meter di atas permukaan laut, dengan area perkemahan khusus di ketinggian 1.300 meter yang sempurna untuk melepas penat dari hiruk-pikuk kota. Kunjungi dan nikmati sendiri keindahan Nagara Puntang.</p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url('assets/img/slide/slide-2.jpeg')">
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url('assets/img/slide/slide-3.jpeg')">
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
    </div>
</section>

<main id="main">
    <section id="cta" class="cta">
        <div class="container">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Ayo pilih paket wisata yang kamu inginkan!</h3>
                    <p>Temukan paket wisata murah sesuai dengan destinasi dan harga yang kamu inginkan!</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle scrollto" href="{{ route('package') }}">Lihat Paket</a>
                </div>
            </div>

        </div>
    </section>

    <section id="paket-wisata" class="paket-wisata">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-head-alpha">
                    <h2>Rekomendasi Wisata</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($tours->take(2) as $tour)
            <div class="col-lg-6 mb-4">
                <div class="package-card-alpha d-flex">
                    <div class="package-thumb w-50">
                        @if ($tour->image)
                        <a src="{{ route('detail', $tour->tour_name) }}"><img src="{{ asset('admin/assets/img/tours/' . $tour->image) }}" alt="Tour Image"></a>
                        @endif
                    </div>
                    <div class="package-card-body w-50">
                        <h3 class="p-card-title"><a href="{{ route('detail', $tour->tour_name) }}">{{ $tour->tour_name }}</a></h3>
                        <div class="p-card-bottom">
                            <div class="book-btn">
                                <a href="{{ route('detail', $tour->tour_name) }}">Lihat Wisata <i class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                            {{-- <div class="p-card-info">
                                <span>Mulai dari</span>
                                <h6>Rp{{ number_format($tour->price) }}</h6>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

    
</main>
@endsection