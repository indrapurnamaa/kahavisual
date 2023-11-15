@extends('template')
@section('title', 'Kaha Visual - Data Pembayaran')
@section('content')
    <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="mt-4">
            <h3>Data Pembayaran</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No Pembayaran</th>
                                    <th scope="col">No Pesanan</th>
                                    <th scope="col">Nama Paket</th>
                                    <th scope="col">Nama Pelanggan</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pembayarans as $pembayaran)
                                    <tr>
                                        <td>{{ $pembayaran->id }}</td>
                                        <td>{{ $pembayaran->pesanan->id }}</td>
                                        <td>{{ $pembayaran->pesanan->paket->nama }}</td>
                                        <td>{{ $pembayaran->pesanan->pelanggan->nama }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('pembayaran.show', $pembayaran->id) }}"><i
                                                            class="bx bx-show me-1"></i> Show</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('pembayaran.edit', $pembayaran->id) }}"><i
                                                            class="bx bx-check me-1"></i> Status</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $pembayarans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
