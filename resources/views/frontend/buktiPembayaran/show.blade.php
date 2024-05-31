<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 350px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 20px;
        }
        p {
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="/assets/admin/img/logo.png" alt="Logo" style="height: 100px; margin-right: 0px;">
        <p style="font-weight: bold; font-size: 40px; margin-bottom: 0; margin-top:1px;">{{ $item->payment_type ?? '' }}</p>
        <p style="margin-bottom : 20px; margin-top:0; color:green; font-weight:bold;">{{ $item->transaction_status == 'settlement' ? 'SUCCESS' : $item->transaction_status }}</p>
        <span style="margin: 0;">{{ $item->transaction_id ?? '' }}</span>
        <p>{{ $item->transaction_time ?? '' }}</p>
        <p>Rp. {{ number_format($item->total_pembayaran ?? '') }}</p>
        <!-- Tidak ada barcode -->
    </div>


    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>

</html>
