@extends('template')
@section('title', 'Kaha Visual - Data Paket Jasa')
@section('content')
    <div class="container mt-4">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="d-md-flex d-grid gap-2 align-items-center">
            <h3 class="mb-0 flex-grow-1">Data Paket Jasa</h3>
            <div class="flex-shrink-0 d-md-flex d-grid gap-2">
                <a href="{{ route('paketjasa.create') }}" class="btn btn-md btn-primary">Tambah Paket Jasa</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <table class="table table-responsive-md ">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($paketjasas as $paketjasa)
                                    <tr>
                                        <td>{{ $paketjasa->nama }}</td>
                                        <td> Rp.{{ number_format($paketjasa->harga,0, ',', '.') }} </td>
                                        {{-- <td>{{ $paketjasa->deskripsi }}</td> --}}
                                        {{-- <td>
                                            <img src="{{ asset('/storage/paketjasa/' . $paketjasa->gambar) }}"
                                                class="rounded" style="width: 50px">
                                        </td> --}}
                                        <td>
                                            <div class="dropdown">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('paketjasa.destroy', $paketjasa->id) }}"
                                                    method="POST">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class='bx bx-dots-horizontal-rounded'></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('datapaketjasa.show', $paketjasa->id) }}"><i
                                                                class="bx bx-show me-1"></i> Show</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('paketjasa.edit', $paketjasa->id) }}"><i
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
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        {{ $paketjasas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
