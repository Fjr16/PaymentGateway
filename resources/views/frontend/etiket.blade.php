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
            width: 300px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>
            <img src="/assets/admin/img/logo.png" alt="Logo" style="height: 50px; margin-right: 10px;">
            <br>
            Etiket Wahana PM
        </h2>
        <p>Nama Tiket : {{ $data->tiket->judul }}</p>
        <p>Nama Wahana : {{ $data->tiket->wahana->nama }}</p>
        <p>Nama Pembeli : {{ $data->user->name }}</p>
        <p>Jumlah : {{ $data->jumlah }}</p>
        <p>Total Harga : {{ $data->harga_total }}</p>
        <!-- Tidak ada barcode -->
    </div>


    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>

</html>
