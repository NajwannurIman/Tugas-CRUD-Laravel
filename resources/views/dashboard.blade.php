@extends('layouts.app')

@section('title','Dashboard')

@section('content')

<style>
        .card {
        width: 200px;
        float: left;
        margin-right: 20px;
        margin-bottom: 20px;
    }

    .clear {
        clear: both;
    }
</style>
@foreach ($barang as $row)
    <div class="card">
        <img class="card-img-top" src="{{ asset('fotobarang/'.$row->foto_barang) }}" alt="Card image cap" >
        <div class="card-body">
            <p class="card-text">{{ $row->nama_barang}}</p>
            <br>
            <p class="card-text">Harga:  Rp.{{ $row->harga}}</p>
        </div>
    </div>
@endforeach

<div class="clear"></div>

@endsection