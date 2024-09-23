@extends('landingpage.layout')
@section('content')
<main id="main" class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card my-5 shadow-lg">
                    <div class="card-body">
                        <h3 class="card-title text-center text-uppercase font-weight-bold">Detail Pesanan</h3>
                        <h6 class="text-center mb-2 text-muted">{{ $invoice->no_pemesanan }}</h6>

                        <div class="text-center mb-3">
                            @if($invoice->status == 'paid')
                                <span class="badge bg-success px-4 py-2">{{ ucfirst($invoice->status) }}</span>
                            @elseif($invoice->status == 'unpaid')
                                <span class="badge bg-danger px-4 py-2">{{ ucfirst($invoice->status) }}</span>
                            @endif
                        </div>

                        <hr>

                        <div class="row mb-2">
                            <div class="col-lg-6 mb-2">
                                <i class="fas fa-user fa-lg text-primary"></i>
                                <strong> Nama:</strong> {{ $invoice->name }}
                            </div>
                            <div class="col-lg-6 mb-2">
                                <i class="fas fa-envelope fa-lg text-primary"></i>
                                <strong> Email:</strong> {{ $invoice->email }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-12 mb-2">
                                <i class="fas fa-map-marker-alt fa-lg text-primary"></i>
                                <strong> Alamat:</strong> {{ $invoice->alamat }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-12 mb-2">
                                <i class="fas fa-globe fa-lg text-primary"></i>
                                <strong> Nama Paket Wisata:</strong> {{ $invoice->tour->tour_name }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-12 mb-2">
                                <i class="fas fa-map-signs fa-lg text-primary"></i>
                                <strong> Destinasi Wisata:</strong> {{ $invoice->tour->destination }}
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-6 mb-2">
                                <i class="fas fa-money-bill-wave fa-lg text-primary"></i>
                                <strong> Harga:</strong> Rp. {{ number_format($invoice->tour->price, 0, ',', '.') }}
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <a href="{{ route('invoice.pdf', $invoice->no_pemesanan) }}" class="btn btn-danger btn-lg mr-2">
                                <i class="far fa-file-pdf"></i> Unduh PDF 
                            </a>
                            <a href="{{ route('invoice.index') }}" class="btn btn-primary btn-lg">
                                <i class="fas fa-home"></i> Kembali 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
