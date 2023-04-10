<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Daftar Kartu</h3>
    <div class="col-4 col-md-4 text-center">
        @foreach ($itemInfo as $item)
            @if ($item['status'] == 'R')
                <a href="">
                    <div class="cardR">
                        <img class="card-img-top" src="{{ asset('images/' . $item['image']) }}"
                            alt="{{ $item['name'] }}">
                        <div class="card-body">
                            <h2 class="card-title">Name     :{{ $item['name'] }}</h2>
                            <h5>Status     :{{ $item['status'] }}</h5>
                            <p class="card-text">Description    :{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </a>
            @elseif ($item['status'] == 'SR')
                <a href="">
                    <div class="cardSR">
                        <img class="card-img-top" src="{{ asset('images/' . $item['image']) }}"
                            alt="{{ $item['name'] }}">
                        <div class="card-body">
                            <h2 class="card-title">Name     :{{ $item['name'] }}</h2>
                            <h5>Status     :{{ $item['status'] }}</h5>
                            <p class="card-text">Description    :{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </a>
            @elseif ($item['status'] == 'SSR')
                <a href="">
                    <div class="cardSSR">
                        <img class="card-img-top" src="{{ asset('images/' . $item['image']) }}"
                            alt="{{ $item['name'] }}">
                        <div class="card-body">
                            <h2 class="card-title">Name     :{{ $item['name'] }}</h2>
                            <h5>Status     :{{ $item['status'] }}</h5>
                            <p class="card-text">Description    :{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
    {{-- <h1>aaa</h1> --}}
</body>
</html>
