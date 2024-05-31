@extends('layouts.admin.app')
@section('title', 'Tiket Wahana')
@section('content')

    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Add New Tiket Wahana</h2>
                    </div>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Something went wrong.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card mb-4">
                <div class="col-lg-12 mt-4">
                    <form action="{{ route('tiket.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Wahana</strong>
                                    <select name="id_wahana" class="custom-select" required>
                                        <option selected>Pilih Wahana</option>
                                        @foreach ($wahanas as $wahana)
                                            <option value="{{ $wahana->id }}">{{ $wahana->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <strong>Judul</strong>
                                    <input type="text" name="judul" class="form-control" placeholder="Judul Lengkap">
                                </div>
                                <div class="form-group">
                                    <strong>Harga</strong>
                                    <input type="number" name="harga" class="form-control" placeholder="Harga">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-right mb-3">
                                <a class="btn btn-dark" href="{{ route('tiket') }}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
