<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                BageConcat
            </a>
        </div>
    </nav>

    <div class="container pb-5">
        <form action="/" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Loop</label>
                <input type="number" name="count" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan jumlah loop" value="<?= $_POST['count'] ?? "" ?>">
            </div>
            <button type="submit" class="btn btn-primary">Generate</button>
        </form>

        <?php

        if ($data) {
            echo '<h3 class="mt-4">Loop ' . $data . '</h3>';

            $bageConcatCount = 0;

            for ($i = 1; $i <= $data; $i++) {
                if ($bageConcatCount >= 5) {
                    break;
                }
                if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "Bage Concat<br>";
                    $bageConcatCount++;
                } else if ($i % 3 == 0) {
                    if ($bageConcatCount >= 2) {
                        echo "Concat<br>";
                    } else {
                        echo "Bage<br>";
                    }
                } else if ($i % 5 == 0) {
                    if ($bageConcatCount >= 2) {
                        echo "Bage<br>";
                    } else {
                        echo "Concat<br>";
                    }
                } else {
                    echo $i . "<br>";
                }
            }
        }

        ?>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>