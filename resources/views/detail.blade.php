@extends('master')

@section('judul', 'Detail')
@section('description', 'Detail deskripsi dari kartu yang terpilih')

@section('content')
    <div class="konten">
        <h1>Detail '{{ $chosen['name'] }}'</h1>
        <div class="isi">
            <img class="" src="{{ asset('images/' . $chosen['image']) }}"
                alt="">
            <div class="deskripsi">
                <h2 class="card-title">Name : {{ $chosen['name'] }}</h2>
                <h3>Status : {{ $chosen['status'] }}</h3>
                <p>Description : {{ $chosen['desc'] }}</p>
                <p>Harga : {{ $chosen['price'] }}</p>
            </div>
        </div>
    </div>
@endsection
