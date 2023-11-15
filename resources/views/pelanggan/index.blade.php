@extends('template')
@section('title', 'Kaha Visual - Data Pelanggan')
@section('content')
    <div class="container mt-4">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="d-md-flex d-grid gap-2 align-items-center">
            <h3 class="mb-0 flex-grow-1">Data Pelanggan</h3>
            <div class="flex-shrink-0 d-md-flex d-grid gap-2">
                <a href="{{ route('pelanggan.create') }}" class="btn btn-md btn-primary">Tambah Pelanggan</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Telepon</th>
                                    {{-- <th scope="col">Alamat</th> --}}
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pelanggans as $pelanggan)
                                    <tr>
                                        <td>{{ $pelanggan->username }}</td>
                                        <td>{{ $pelanggan->email }}</td>
                                        <td>{{ $pelanggan->nama }}</td>
                                        <td>{{ $pelanggan->telepon }}</td>
                                        {{-- <td>{{ $pelanggan->alamat }}</td> --}}
                                        <td>
                                            <div class="dropdown">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('pelanggan.destroy', $pelanggan->id) }}"
                                                    method="POST">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class='bx bx-dots-horizontal-rounded'></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('pelanggan.show', $pelanggan->id) }}"><i
                                                                class="bx bx-show me-1"></i> Show</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('pelanggan.edit', $pelanggan->id) }}"><i
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
                        {{ $pelanggans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
