@extends('template')
@section('title', 'Kaha Visual - Tambah Pesanan')
@section('content')
    <div class="container">
        <div class="mt-4">
            <h3>Tambah Pesanan</h3>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pesanan.store') }}" method="POST">

                            @csrf
                            <div class="form-group mb-2">
                                <label class="font-weight-bold" for="paket_id">Paket Jasa</label>
                                <select name="paket_id" id="paket_id" class="form-select">
                                    @foreach ($paketjasas as $paketjasa)
                                        <option value="{{ $paketjasa->id }}">{{ $paketjasa->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Tanggal Acara</label>
                                <input type="date" class="form-control @error('tgl_acara') is-invalid @enderror"
                                    name="tgl_acara" value="{{ old('tgl_acara') }}" placeholder="Masukan Tanggal">

                                <!-- error message untuk title -->
                                @error('tgl_acara')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label class="font-weight-bold">Jam Acara</label>
                                <input type="time" class="form-control @error('jam_acara') is-invalid @enderror"
                                    name="jam_acara" value="{{ old('jam_acara') }}" placeholder="Masukan Jam">

                                <!-- error message untuk title -->
                                @error('jam_acara')
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
                                        <a href="{{ route('paketjasa.index') }}" class="btn btn-secondary">Kembali</a>
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
