<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Etiket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 350px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        p {
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="/assets/admin/img/logo.png" alt="Logo" style="height: 50px; margin-right: 10px;">
        <p style="font-weight: bold; font-size: 40px; margin-bottom: 0; margin-top:1px;">{{ $data['payment_type'] }}</p>
        <p style="margin-bottom : 20px; margin-top:0; color:green; font-weight:bold;">{{ $data['transaction_status'] == 'settlement' ? 'SUCCESS' : $data['transaction_status'] }}</p>
        <span style="margin: 0;">{{ $data['transaction_id'] }}</span>
        <p>{{ $data['transaction_time'] }}</p>
        {{-- <p>Nama Wahana : {{ $data->tiket->wahana->nama }}</p> --}}
        {{-- <p>Nama Pembeli : {{ $data->user->name }}</p> --}}
        {{-- <p>Jumlah : {{ $data->jumlah }}</p> --}}
        <p>{{ number_format($data['gross_amount']) }}</p>
        <!-- Tidak ada barcode -->
    </div>


    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>

</html>
