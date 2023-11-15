@extends('template')
@section('title', 'Kaha Visual - Data Pesanan')
@section('content')
    <div class="container mt-4">
        <div class="d-md-flex d-grid gap-2 align-items-center">
            <h3 class="mb-0 flex-grow-1">Data Pesanan</h3>
            {{-- <div class="flex-shrink-0 d-md-flex d-grid gap-2">
                <a href="{{ route('pesanan.create') }}" class="btn btn-md btn-primary">Tambah Pesanan</a>
            </div> --}}
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No Pesanan</th>
                                    <th scope="col">Paket Jasa</th>
                                    <th scope="col">Tanggal Acara</th>
                                    <th scope="col">Jam Acara</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanans as $pesanan)
                                    <tr>
                                        <td>{{ $pesanan->id }}</td>
                                        <td>{{ $pesanan->paket->nama }}</td>
                                        <td>{{ date('d-M-Y',strtotime($pesanan->tgl_acara)) }}</td>
                                        <td>{{ date('H:i',strtotime($pesanan->jam_acara)) }} Wita</td>
                                        <td>
                                            <div class="dropdown">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('pesanan.destroy', $pesanan->id) }}" method="POST">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class='bx bx-dots-horizontal-rounded'></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('pesanan.show', $pesanan->id) }}"><i
                                                                class="bx bx-show me-1"></i> Show</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('pesanan.edit', $pesanan->id) }}"><i
                                                                class="bx bx-edit me-1"></i> Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item" type="submit"><i
                                                                class="bx bx-trash me-1"></i> Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $pesanans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
