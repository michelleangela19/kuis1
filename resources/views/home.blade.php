@extends('master')

@section('judul', 'Home')
@section('description', 'Kumpulan kartu mengenai jenis-jenis pisang terpilih')

@section('content')
    <h3>Daftar Kartu</h3>
    <div class="col-4 col-md-4 text-center">
        @foreach ($itemInfo as $item)
            @if ($item['status'] == 'R')
                <a href="/detail/{{$item['name']}}">
                    <div class="cardR">
                        <img class="card-img-top" src="{{ asset('images/' . $item['image']) }}"
                            alt="{{ $item['name'] }}">
                        <div class="card-body">
                            <h2 class="card-title">Name     :{{ $item['name'] }}</h2>
                            <h3>Status     :{{ $item['status'] }}</h3>
                            <p class="card-text">Description    :{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </a>
            @elseif ($item['status'] == 'SR')
                <a href="/detail/{{$item['name']}}">
                    <div class="cardSR">
                        <img class="card-img-top" src="{{ asset('images/' . $item['image']) }}"
                            alt="{{ $item['name'] }}">
                        <div class="card-body">
                            <h2 class="card-title">Name     :{{ $item['name'] }}</h2>
                            <h3>Status     :{{ $item['status'] }}</h3>
                            <p class="card-text">Description    :{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </a>
            @elseif ($item['status'] == 'SSR')
                <a href="/detail/{{$item['name']}}">
                    <div class="cardSSR">
                        <img class="card-img-top" src="{{ asset('images/' . $item['image']) }}"
                            alt="{{ $item['name'] }}">
                        <div class="card-body">
                            <h2 class="card-title">Name     :{{ $item['name'] }}</h2>
                            <h3>Status     :{{ $item['status'] }}</h3>
                            <p class="card-text">Description    :{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
@endsection
