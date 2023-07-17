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
        @foreach ($errors->all() as $message)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
        <form action="/" method="POST">
            @csrf
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Kota Asal</label>
                        <input type="text" disabled class="form-control bg-white border-white" value="Yogyakarta">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kota Tujuan</label>
                        <select class="form-select @error('destination') is-invalid @enderror" name="destination" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->city_id }}">{{ $city->city_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Berat (Gram)</label>
                        <input type="number" name="weight" class="form-control @error('weight') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kurir</label>
                        <select class="form-select @error('courier') is-invalid @enderror" name="courier" aria-label="Default select example" >
                            <option selected>Open this select menu</option>
                            <option value="jne">JNE</option>
                            <option value="pos">POS Indonesia</option>
                            <option value="tiki">TIKI</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cek</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
