@extends('template')
@section('title', 'Kaha Visual - Pembayaran')
@section('content')
    <div class="container">
        <div class="mt-4">
            <h3>Pembayaran</h3>
        </div>
        <hr>
        <div class="card col-12 col-lg-6">
            <div class="card-body">
                <table>
                    <tr>
                        <td class="fw-bold">Silahkan transfer DP ke no rekening berikut</td>
                        <td>: BCA 009900</td>
                    </tr>
                </table>
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
                        <td class="kiri">: {{ $pesanan->tgl_acara }}</td>
                    </tr>
                    <tr>
                        <td>Jam</td>
                        <td class="kiri">: {{ $pesanan->jam_acara }} Wita</td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td class="kiri">:  Rp.{{ number_format($pesanan->paket->harga,0, ',', '.') }} </td>
                    </tr>
                    <tr>
                        <td>DP</td>
                        <td class="kiri">: Rp.{{ number_format($dp,0, ',', '.') }}</td>
                    </tr>
                </table>
                <hr>
                <form method="POST" action="{{ route('bayar', ['pesanan_id' => $pesanan->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                     {{-- <div class="form-group">
                        <label class="font-weight-bold">DP</label>
                        <input type="number" class="form-control" name="dp" min="0" step="0.01" required>
                    </div> --}}
                    <div class="form-group mt-2">
                        <label class="font-weight-bold">Bukti Pembayaran</label>
                        <input type="file" class="form-control @error('bukti_pembayaran') is-invalid @enderror"
                            name="bukti_pembayaran">

                        <!-- error message untuk title -->
                        @error('bukti_pembayaran')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Tampilkan informasi total harga dan sisa pembayaran -->
                    {{-- <div>
                        <p>Total Harga: {{ $totalHarga }}</p>
                        <p>Sisa Pembayaran: {{ $totalHarga - $dp }}</p>
                    </div> --}}
                    <hr>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-md btn-primary">Upload</button>
                    </div>
                    <div class="d-grid mt-2">
                        <a href="{{ route('riwayatpesanan') }}"
                            class="btn btn-secondary d-flex justify-content-center">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
