@extends('template')
@section('title', 'Kaha Visual - Riwayat Pesanan')
@section('content')
    <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="mt-4">
            <h3>Riwayat Pesanan</h3>
        </div>
        <hr>
        <div class="row">
            @foreach ($riwayatPesanan as $pesanan)
                <div class="col-12 col-md-6 mb-3">
                    <div class="card border-1 shadow-lg">
                        <img class="card-img-top" src="{{ asset('/storage/paketjasa/' . $pesanan->paket->gambar) }}">
                        <div class="card-body">
                            <hr>
                            <table>
                                <tr>
                                    <td>No. Pesanan</td>
                                    <td class="kiri">: {{ $pesanan->id }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Paket</td>
                                    <td class="kiri">: {{ $pesanan->paket->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td class="kiri">: {{ date('d-M-Y', strtotime($pesanan->tgl_acara)) }}</td>
                                </tr>
                                <tr>
                                    <td>Jam</td>
                                    <td class="kiri">: {{ date('H:i', strtotime($pesanan->jam_acara)) }} Wita</td>
                                </tr>
                                <tr>
                                    <td>Total Harga</td>
                                    <td class="kiri">: Rp.{{ number_format($pesanan->paket->harga,0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td>DP</td>
                                    <td class="kiri">: Rp.{{ $pesanan->pembayaran ? number_format($pesanan->pembayaran->dp,0, ',', '.') : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Sisa Pembayaran</td>
                                    <td class="kiri">: Rp.{{ $pesanan->pembayaran ? number_format($pesanan->pembayaran->sisa_pembayaran,0, ',', '.') : '' }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td class="kiri">:
                                        {{ $pesanan->pembayaran ? $pesanan->pembayaran->status : 'Belum dibayar' }}
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            @if ($pesanan->pembayaran)
                            @else
                                <div>
                                    <a
                                        href="{{ route('pembayaran', ['pesanan_id' => $pesanan->id]) }}"class="btn btn-primary d-flex justify-content-center">Bayar
                                        Sekarang</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
