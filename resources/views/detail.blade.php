@extends('master')

@section('judul', 'Detail')
@section('description', 'Detail deskripsi dari kartu yang terpilih')

@section('content')
    <div class="cardR">
        <img class="card-img-top" src="{{ asset('images/' . $chosen['image']) }}"
            alt="{{ $chosen['name'] }}">
        <div class="card-body">
            <h2 class="card-title">Name     :{{ $chosen['name'] }}</h2>
            <h3>Status     :{{ $chosen['status'] }}</h3>
            <p class="card-text">Description    :{{ $chosen['desc'] }}</p>
            <p>Harga:   {{ $chosen['price'] }}</p>
        </div>
    </div>
@endsection
