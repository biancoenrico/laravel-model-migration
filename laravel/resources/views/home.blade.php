<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="content">
            @foreach ( $travels as $item )
                <ul>
                    <li class="banner">
                        <img src="{{ $item['img'] }}" alt="">
                    </li>
                    <li>
                        seats: <span></span>{{ $item['seats'] }}
                    </li>
                    <li>
                        available:
                        @if ( $item['available'] == true)
                            <span>yes</span>
                        @else
                            <span>no</span>
                        @endif

                    </li>
                    <li>
                        from: <span>{{ $item['from'] }}</span>
                    </li>
                    <li>
                        to: <span>{{ $item['to'] }}</span>
                    </li>
                    <li>
                        distance: <span>{{ $item['distance'] }}km</span>
                    </li>
                    <li>
                        price: <span>{{ $item['price'] }}$</span>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
</body>
</html>
