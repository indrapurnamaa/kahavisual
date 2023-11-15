@extends('template')
@section('title', 'Kaha Visual - Edit Data Pelanggan')
@section('content')
    <div class="container">
        <div class="mt-4">
            <h3>Edit Data Pelanggan</h3>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    name="username" value="{{ old('username', $pelanggan->username) }}"
                                    placeholder="Masukkan Username">

                                <!-- error message untuk title -->
                                @error('username')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Password</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror"
                                    name="password" value="{{ old('password',$pelanggan->password) }}"
                                    placeholder="Masukkan Password">

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
                                    name="email" value="{{ old('email', $pelanggan->email) }}"
                                    placeholder="Masukkan Email">

                                <!-- error message untuk title -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ old('nama', $pelanggan->nama) }}"
                                    placeholder="Masukkan Nama Lengkap">

                                <!-- error message untuk title -->
                                @error('username')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Telepon</label>
                                <input type="text" class="form-control @error('telepon') is-invalid @enderror"
                                    name="telepon" value="{{ old('telepon',$pelanggan->telepon) }}" placeholder="Masukkan Nomor Telepon">

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
                                    placeholder="Masukkan Alamat">{{ old('alamat', $pelanggan->alamat) }}</textarea>

                                <!-- error message untuk content -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <hr>
                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
