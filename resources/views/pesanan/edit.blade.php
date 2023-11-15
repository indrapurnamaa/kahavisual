@extends('template')
@section('title', 'Kaha Visual - Edit Paket Jasa')
@section('content')
    <div class="container">
        <div class="mt-4">
            <h3>Edit Data Pesanan</h3>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pesanan.update', $pesanan->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Tanggal Acara</label>
                                <input type="date" class="form-control @error('tgl_acara') is-invalid @enderror"
                                    name="tgl_acara" value="{{ old('tgl_acara', $pesanan->tgl_acara) }}">

                                <!-- error message untuk title -->
                                @error('tgl_acara')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Jam Acara</label>
                                <input type="text" class="form-control @error('jam_acara') is-invalid @enderror"
                                    name="jam_acara" value="{{ old('jam_acara', $pesanan->jam_acara) }}">

                                <!-- error message untuk title -->
                                @error('jam_acara')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn btn-md btn-primary">Update</button>
                                <a href="{{ route('pesanan.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
