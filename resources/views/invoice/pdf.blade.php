<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .invoice-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .invoice-header {
            border-bottom: 2px solid #28a745;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .invoice-header h2 {
            color: #28a745;
        }
        .invoice-detail p {
            margin: 0;
        }
        .invoice-detail i {
            margin-right: 10px;
            color: #28a745;
        }
        .invoice-footer {
            border-top: 2px solid #28a745;
            padding-top: 10px;
            margin-top: 20px;
        }
        .text-primary {
            color: #28a745 !important;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 150px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="invoice-container">
            <div class="logo">
                <img src='assets/img/slide/logo.PNG' alt="Logo">
            </div>
            <div class="invoice-header text-center">
                <h2>Invoice Detail</h2>
                <h6>{{ $invoice->no_pemesanan }}</h6>
            </div>
            <div class="invoice-detail">
                <p><strong>Status: </strong>{{ $invoice->status }}</p>
                <hr>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <i class="fas fa-user fa-lg"></i>
                        <strong>Nama:</strong> {{ $invoice->name }}
                    </div>
                    <div class="col-lg-6">
                        <i class="fas fa-envelope fa-lg"></i>
                        <strong>Email:</strong> {{ $invoice->email }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <i class="fas fa-map-marker-alt fa-lg"></i>
                        <strong>Alamat:</strong> {{ $invoice->alamat }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <i class="fas fa-globe fa-lg"></i>
                        <strong>Nama Paket Wisata:</strong> {{ $invoice->tour->tour_name }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <i class="fas fa-globe fa-lg"></i>
                        <strong>Destinasi Wisata:</strong> {{ $invoice->tour->destination }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-6">
                        <i class="fas fa-money-bill-wave fa-lg"></i>
                        <strong>Harga:</strong> Rp. {{ number_format($invoice->tour->price, 0, ',', '.') }}
                    </div>
                </div>
            </div>
            <div class="invoice-footer text-center">
                <p>Terima kasih telah memilih layanan kami!</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
