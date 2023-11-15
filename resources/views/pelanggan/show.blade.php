@extends('template')
@section('title', 'Kaha Visual - Detail Pelanggan')
@section('content')
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="text-center">
                            <h4>Detail Pelanggan</h4>
                        </div>
                        <hr>
                        <div class="d-grid">
                            <div class="mb-2">Username</div>
                            <h6>{{ $pelanggan->username }}</h6>
                        </div>
                        <div class="d-grid">
                            <div class="mb-2">Email</div>
                            <h6>{{ $pelanggan->email }}</h6>
                        </div>
                        <div class="d-grid">
                            <div class="mb-2">Nama Lengkap</div>
                            <h6>{{ $pelanggan->nama }}</h6>
                        </div>
                        <div class="d-grid">
                            <div class="mb-2">Telepon</div>
                            <h6>{{ $pelanggan->telepon }}</h6>
                        </div>
                        <div class="d-grid">
                            <div class="mb-2">Alamat</div>
                            <h6>{{ $pelanggan->alamat }}</h6>
                        </div>
                        <hr>
                        <div>
                            <a href="{{ route('pelanggan.index') }}"
                                class="btn btn-secondary d-flex justify-content-center">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
