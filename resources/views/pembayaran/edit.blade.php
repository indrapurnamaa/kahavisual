@extends('template')
@section('title', 'Kaha Visual - Konfirmasi Status')
@section('content')
    <div class="container">
        <div class="mt-4">
            <h3>Edit Data Paket Jasa</h3>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="form-group mb-2">
                                    <label class="font-weight-bold" for="status">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="Pesanan Diproses">Pesanan Diproses</option>
                                        <option value="Pesanan Selesai">Pesanan Selesai</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <a href="{{ route('pembayaran.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
