@extends('template')
@section('title', 'Kaha Visual - Detail Pesanan')
@section('content')
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="text-center">
                            <h4>Detail Pesanan</h4>
                        </div>
                        <hr>
                        <div class="d-grid mb-3">
                            <div>No Pesanan</div>
                            {{ $pesanan->id }}
                        </div>
                        <div class="d-grid mb-3">
                            <div>Paket Jasa</div>
                            {{ $pesanan->paket->nama }}
                        </div>
                        <div class="d-grid mb-3">
                            <div>Tanggal Acara</div>
                            {{ date('d-M-Y', strtotime($pesanan->tgl_acara)) }}
                        </div>
                        <div class="d-grid mb-3">
                            <div>Jam Acara</div>
                            {{ date('H:i', strtotime($pesanan->jam_acara)) }}
                            Wita
                        </div>
                        <div class="d-grid mb-3">
                            <div>Nama Pelanggan</div>
                            {{ $pesanan->pelanggan->nama }}
                        </div>
                        <hr>
                        <div>
                            <a href="{{ route('pesanan.index') }}"
                                class="btn btn-secondary d-flex justify-content-center">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
