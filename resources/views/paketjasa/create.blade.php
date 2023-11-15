@extends('template')
@section('title', 'Kaha Visual - Tambah Paket Jasa')
@section('content')
    <div class="container">
        <div class="mt-4">
            <h3>Tambah Paket Jasa</h3>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('paketjasa.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Paket">

                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Deskripsi</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5"
                                    placeholder="Masukkan Deskripsi">{{ old('deskripsi') }}</textarea>

                                <!-- error message untuk content -->
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Harga</label>
                                <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                    name="harga" value="{{ old('harga') }}" placeholder="Masukkan Harga">

                                <!-- error message untuk title -->
                                @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Gambar</label>
                                <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                    name="gambar">

                                <!-- error message untuk title -->
                                @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <hr>
                            <div>
                                <div class="row gap-2 gap-md-0">
                                    <div class="d-grid col-md-4">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    <div class="d-grid col-md-4">
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                    </div>
                                    <div class="d-grid col-md-4">
                                        <a href="{{ route('datapaketjasa.index') }}" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
