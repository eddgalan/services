<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Http\Controllers\Request;

$request = new Request;
$request->send();
