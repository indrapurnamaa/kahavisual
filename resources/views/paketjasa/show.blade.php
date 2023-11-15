@extends('template')
@section('title','Kaha Visual - Detail Paket')
@section('content')
<div class="container">
    <div class="mt-3">
        <h3>Detail Paket</h3>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 col-md-7">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h4>{{ $paketjasa->nama }}</h4>
                    <p class="tmt-3">
                        {{ $paketjasa->deskripsi}}
                    </p>
                    <p class="tmt-3">
                        Rp.{{ number_format($paketjasa->harga,0, ',', '.') }}
                    </p>
                    <hr>
                    <img src="{{ asset('storage/paketjasa/'.$paketjasa->gambar) }}" class="w-100 rounded">
                    <hr>
                    <div class="mb-2">
                        <a href="{{ route('pesanan.create') }}" class="btn btn-primary d-flex justify-content-center">Pesan Sekarang</a>
                    </div>
                    <div>
                        <a href="{{route('paketjasa.index')}}" class="btn btn-secondary d-flex justify-content-center">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection