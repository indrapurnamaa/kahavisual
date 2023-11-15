@extends('template')
@section('title','Kaha Visual - Paket Jasa')
@section('content')
<div class="container">
    <div class="mt-4">
        <h1>Paket Jasa</h1>
        <h5>Silahkan Pilih Paket Jasa</h5>
    </div>
    <hr>
    <div class="row">
        @foreach ($paketjasas as $pktjasa)
        <div class="col-12 col-md-6 mb-3">
            <div class="card border-1 shadow-lg" style="width:100%">
                <img class="card-img-top" src="{{ asset('/storage/paketjasa/'.$pktjasa->gambar) }}">
                <div class="card-body">
                    <h4 class="card-title">{{$pktjasa->nama}}</h4>
                    <p class="card-text">Rp.{{ number_format($pktjasa->harga,0, ',', '.') }}</p>
                    <hr>
                    <a href="{{route('paketjasa.show', $pktjasa->id)}}" class="btn btn-primary d-flex justify-content-center">Detail Paket</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection