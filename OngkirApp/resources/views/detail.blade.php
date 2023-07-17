<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                Cek Ongkir
            </a>
        </div>
    </nav>

    <div class="container">
        @if ($data->rajaongkir->status->code == 200)
            <div class="card mt-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Asal</h5>
                            <p>{{ $data->rajaongkir->origin_details->city_name }}, {{ $data->rajaongkir->origin_details->province }}</p>

                            <h5>Tujuan</h5>
                            <p>{{ $data->rajaongkir->destination_details->city_name }}, {{ $data->rajaongkir->destination_details->province }}</p>

                            <h5>Berat</h5>
                            <p>{{ $data->rajaongkir->query->weight }} Gram</p>

                            <h5>Kurir</h5>
                            <p>{{ $data->rajaongkir->results[0]->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Layanan</h6>
                            <ul>
                                @foreach ($data->rajaongkir->results[0]->costs as $cost)
                                    <li>
                                        <strong>{{ $cost->service }}</strong><br>
                                        {{ $cost->description }}<br>
                                        Biaya: Rp. {{ $cost->cost[0]->value }} <br>
                                        Estimasi: {{ $cost->cost[0]->etd }} hari <br>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <h3 class="text-center mt-5">{{ $data->rajaongkir->status->description }}</h3>
        @endif

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
