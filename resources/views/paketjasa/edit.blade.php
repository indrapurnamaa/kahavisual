@extends('template')
@section('title','Kaha Visual - Edit Paket Jasa')
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
                    <form action="{{ route('paketjasa.update', $paketjasa->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $paketjasa->nama) }}" placeholder="Masukkan Nama Paket">

                            <!-- error message untuk title -->
                            @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Deskripsi</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5" placeholder="Masukkan Deskripsi">{{ old('deskripsi',$paketjasa->deskripsi) }}</textarea>

                            <!-- error message untuk content -->
                            @error('deskripsi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Harga</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga' ,$paketjasa->harga) }}" placeholder="Masukkan Harga">

                            <!-- error message untuk title -->
                            @error('harga')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">

                            <!-- error message untuk title -->
                            @error('gambar')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-md btn-primary">Update</button>
                        <a href="{{route('datapaketjasa.index')}}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection