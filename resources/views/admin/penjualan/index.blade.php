@extends('layouts.admin.app')
@section('title', 'Penjualan')
@section('content')

    <div class="container-fluid">
        <div class="col-lg-12">

            <div class="row my-3">
                <div class="col-lg-6">
                    <h2>Penjualan</h2>
                </div>
                <div class="col-lg-6 text-right">
                    <a class="btn btn-success" href="{{ route('penjualan.cetak') }}" target="a_blank">
                        <i class="fas fa-plus"></i> Cetak Data
                    </a>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success text-center">
                    <h6>{{ $message }}</h6>
                </div>
            @endif

            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Wahana</h6>
                </div>
                <div class="table-responsive p-3">
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
                                <th>Bukti Pembayaran</th>
                                <th width="150px">Action</th>
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
                                    <td>{{ $penjualan->payment ? ($penjualan->payment->transaction_status == 'settlement' ? 'Selesai' : $penjualan->payment->transaction_status) : $penjualan->status }}</td>
                                    <td>
                                        @if ($penjualan->status == 'Selesai')                                            
                                            @if ($penjualan->payment)
                                                <a href="{{ route('api/pembayaran/transaction.show', $penjualan->id) }}" class="btn btn-primary w-100"
                                                    target="_blank">SHOW</a>
                                            @else
                                                <button class="btn btn-dark" disabled>NOT FOUND</button>
                                            @endif
                                        @else
                                            <button class="btn btn-primary w-100" disabled>MENUNGGU</button>
                                        @endif
                                        
                                    </td>

                                    <td>
                                        <form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="POST">
                                            @if ($penjualan->status == 'Diproses')
                                                <a class="btn btn-primary my-1"
                                                    href="{{ route('penjualan.konfirmasi', $penjualan->id) }}">Konfirmasi</a>
                                            @endif
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
