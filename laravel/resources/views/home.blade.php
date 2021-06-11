<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            @foreach ( $travels as $item )
                <li>
                    seats: {{ $item['seats'] }}
                </li>
                <li>
                    @if ( $item['available'] == true)
                        available
                    @else
                        unavailable
                    @endif

                </li>
                <li>
                    from: {{ $item['from'] }}
                </li>
                <li>
                    to: {{ $item['to'] }}
                </li>
                <li>
                    distance: {{ $item['distance'] }} km
                </li>
                <li>
                    price: {{ $item['price'] }}$
                </li>
                <br>
            @endforeach
        </ul>
    </div>
</body>
</html>
