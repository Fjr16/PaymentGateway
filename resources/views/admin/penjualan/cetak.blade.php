<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Etiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="text-center">
            <img src="/assets/admin/img/logo.png" alt="Logo" style="height: 50px; margin-right: 10px;">Data
            Pemesanan
            Tiket Wahana PM
        </h2>
        <br>
        <div class="table table-borderet">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th width="30px">No</th>
                        <th>Nama Tiket</th>
                        <th>Nama Wahana</th>
                        <th>Nama User</th>
                        <th>Harga Satuan</th>
                        <th>Jumlah</th>
                        <th>Harga Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penjualans as $penjualan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $penjualan->tiket->judul }}</td>
                            <td>{{ $penjualan->tiket->wahana->nama }}</td>
                            <td>{{ $penjualan->user->name }}</td>
                            <td>{{ $penjualan->tiket->harga }}</td>
                            <td>{{ $penjualan->jumlah }}</td>
                            <td>{{ $penjualan->harga_total }}</td>
                            <td>{{ $penjualan->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>

</html>
