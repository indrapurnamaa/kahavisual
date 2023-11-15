@extends('template')
@section('title', 'Kaha Visual - Pembayaran')
@section('content')
    <div class="container">
        <hr>
        <div class="row gap-3 gap-md-0">
            <div class="col-12 col-md-6">
                <div class="card border-0 shadow-lg col-12 ">
                    <div class="card-body">
                        <div class="text-center">
                            <h4>Detail Pembayaran</h4>
                        </div>
                        <hr>
                        <div class="d-grid">
                            No Pembayaran
                            <div>
                                {{ $pembayaran->id }}
                            </div>
                        </div>
                        <div class="d-grid mt-2">
                            No Pesanan
                            <div>
                                {{ $pembayaran->pesanan->id }}
                            </div>
                        </div>
                        <div class="d-grid mt-2">
                            Nama Paket
                            <div>
                                {{ $pembayaran->pesanan->paket->nama }}
                            </div>
                        </div>
                        <div class="d-grid mt-2">
                            Nama Pelanggan
                            <div>
                                {{ $pembayaran->pesanan->pelanggan->nama }}
                            </div>
                        </div>
                        <div class="d-grid mt-2">
                            Total Harga
                            <div>
                                Rp.{{ number_format($pembayaran->pesanan->paket->harga,0, ',', '.') }}
                            </div>
                        </div>
                        <div class="d-grid mt-2">
                            DP
                            <div>
                                Rp.{{ number_format($pembayaran->dp,0, ',', '.') }}
                            </div>
                        </div>
                        <div class="d-grid mt-2">
                            Status Pesanan
                            <div>
                                {{ $pembayaran->status }}
                            </div>
                        </div>
                        <div class="d-grid mt-2">
                            Sisa Pembayaran
                            <div>
                                Rp.{{ number_format($pembayaran->sisa_pembayaran,0, ',', '.') }}
                            </div>
                        </div>
                        <hr>
                        <div class="d-grid">
                            <a href="{{ route('pembayaran.index') }}"
                                class="btn btn-secondary d-flex justify-content-center">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card border-0 shadow-lg col-12">
                    <div class="card-body">
                        <div class="text-center">
                            <h4>Bukti Pembayaran</h4>
                        </div>
                        <hr>
                        <div>
                            <img src="{{ asset('/storage/pembayaran/' . $pembayaran->bukti_pembayaran) }}" class="rounded"
                                style="width: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
