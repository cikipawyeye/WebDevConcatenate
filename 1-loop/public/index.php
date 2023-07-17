<?php

require __DIR__ . "/../vendor/autoload.php";

use App\Controllers\BageConcat;

$bageConcat = new BageConcat();

return $bageConcat->loop($_POST['count'] ?? null);