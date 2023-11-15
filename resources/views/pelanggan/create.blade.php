@extends('template')
@section('title', 'Kaha Visual - Tambah Pelanggan')
@section('content')
    <div class="container">
        <div class="mt-4">
            <h3>Tambah Pelanggan</h3>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pelanggan.store') }}" method="POST">

                            @csrf

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    name="username" value="{{ old('username') }}" placeholder="Masukkan Username">

                                <!-- error message untuk title -->
                                @error('username')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" value="{{ old('passaword') }}" placeholder="Masukkan Password">

                                <!-- error message untuk title -->
                                @error('password')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Masukkan Email">

                                <!-- error message untuk title -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Lengkap">

                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Telepon</label>
                                <input type="text" class="form-control @error('telepon') is-invalid @enderror"
                                    name="telepon" value="{{ old('telepon') }}" placeholder="Masukkan Nomor Telepon">

                                <!-- error message untuk title -->
                                @error('telepon')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Alamat</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5"
                                    placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>

                                <!-- error message untuk content -->
                                @error('alamat')
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
                                        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
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
