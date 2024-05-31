@extends('layouts.frontendapp')
@section('title', 'Frontend')
@section('content')

    <main id="main">
        <!-- ======= Hero Section ======= -->
        <section class="d-flex align-items-center" style="background-color: #37517e;">

            <div id="services" class="container">
                <div class="row">
                    <div class="text-center" style="color: white;">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2>Tiket Saya</h2>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->


        <!-- ======= About Us Section ======= -->
        <section class="pesanan">
            <div class="container" data-aos="fade-up">
                <br>
                <br>
                <h3>Data Tiket Yang Pesan</h3>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th width="30px">No</th>
                                <th>Nama Tiket</th>
                                <th>Wahana</th>
                                <th>Status</th>
                                <th>Jumlah</th>
                                <th>Total Harga (Rp)</th>
                                <th>Status Pembayaran</th>
                                <th class="text-center">E-Tiket</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesanans as $pesanan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pesanan->tiket->judul }}</td>
                                    <td>{{ $pesanan->tiket->wahana->nama }}</td>
                                    <td>{{ $pesanan->status }}</td>
                                    <td>{{ $pesanan->jumlah }}</td>
                                    <td>{{ $pesanan->harga_total }}</td>

                                    {{-- <td>
                                        {!! $pesanan->bukti_pembayaran
                                            ? '<a href="' . url('gambar/bukti-pembayaran/' . $pesanan->bukti_pembayaran) . '" target="_blank">Lihat</a>'
                                            : '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal' .
                                                $pesanan->id .
                                                '">Upload</button>' !!}

                                    </td> --}}
                                    <td>
                                        <a href="{{ route('api/pembayaran/transaction.show', $pesanan->id) }}" class="btn btn-primary">Check</a>
                                    </td>
                                    <td>
                                        @if ($pesanan->status == 'Selesai')
                                            <a href="{{ route('etiket', $pesanan->id) }}" target="_blank" class="btn btn-success w-100">Cetak</a>
                                        @else
                                            <button class="btn btn-primary w-100 checkout" data-bs-target="{{ $pesanan->id }}">Checkout</button>
                                        @endif

                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $pesanan->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Bukti Pembayaran
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('bukti.pembayaran', $pesanan->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <div class="modal-body">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>Bukti Pembayaran</strong>
                                                            <input type="file" class="form-control form-control-md"
                                                                name="bukti_pembayaran"
                                                                placeholder="Foto Bukti Pembayaran" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal{{ $pesanan->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title fs-5" id="exampleModalLabel">Upload Bukti Pembayaran
                                                </h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('bukti.pembayaran', $pesanan->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <div class="modal-body">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>Foto</strong>
                                                            <input type="file" class="form-control form-control-md"
                                                                name="bukti_pembayaran"
                                                                placeholder="Foto Bukti Pembayaran" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </section><!-- End About Us Section -->

    </main><!-- End #main -->

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            // For example trigger on button clicked, or any time you need
            var payButtons = document.querySelectorAll('.checkout');
            payButtons.forEach(function(btn){
                btn.addEventListener('click', async function () {
                    var id_pesanan = btn.getAttribute('data-bs-target');
                    var url = "{{ route('api/pembayaran.getToken', '') }}/" + id_pesanan;
                    try {
                        const response = await fetch(url)
                        const token = await response.text();
                        window.snap.pay(token, {
                            onSuccess : function(result){
                                var dataToUpdate = {
                                    'status_code' : result.status_code,
                                    'transaction_id' : result.transaction_id,
                                    'transaction_status' : result.transaction_status,
                                    'transaction_time' : result.transaction_time,
                                    'payment_type' : result.payment_type,
                                    'order_id' : result.order_id,
                                    'total_pembayaran' : result.gross_amount
                                };
                                fetch("{{ route('api/pembayaran.update', '') }}/" + id_pesanan, {
                                    method : 'POST',
                                    headers : {
                                        'Content-Type' : 'application/json'
                                    },
                                    body : JSON.stringify(dataToUpdate),
                                })
                                .then(response => {
                                    return response.json(); // Mengubah respons menjadi JSON
                                })
                                .then(data => {
                                    alert('' + data.status + ', ' + data.message);
                                })
                                window.location.reload();
                            },
                            onPending : function(result){
                                alert('Pembayaran Pending');
                                var dataToUpdate = {
                                    'status_code' : result.status_code,
                                    'transaction_id' : result.transaction_id,
                                    'transaction_status' : result.transaction_status,
                                    'transaction_time' : result.transaction_time,
                                    'payment_type' : result.payment_type,
                                    'order_id' : result.order_id,
                                    'total_pembayaran' : result.gross_amount
                                };
                                fetch("{{ route('api/pembayaran.update', '') }}/" + id_pesanan, {
                                    method : 'POST',
                                    headers : {
                                        'Content-Type' : 'application/json'
                                    },
                                    body : JSON.stringify(dataToUpdate),
                                })
                            },
                            onError : function(result){
                                alert('Pembayaran Gagal');
                                var dataToUpdate = {
                                    'status_code' : result.status_code,
                                    'transaction_id' : result.transaction_id,
                                    'transaction_status' : result.transaction_status,
                                    'transaction_time' : result.transaction_time,
                                    'payment_type' : result.payment_type,
                                    'order_id' : result.order_id,
                                    'total_pembayaran' : result.gross_amount
                                };
                                fetch("{{ route('api/pembayaran.update', '') }}/" + id_pesanan, {
                                    method : 'POST',
                                    headers : {
                                        'Content-Type' : 'application/json'
                                    },
                                    body : JSON.stringify(dataToUpdate),
                                })
                            },
                            onClose : function(){
                                alert('Pembayaran belum selesai, Checkout Kembali untuk melanjutkan')
                            }
                        });
                    } catch (error) {
                        console.log(error.message);
                    }
                });
            })
        })
    </script>
@endsection
