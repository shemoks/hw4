<?php

use Layer\App\framework\Url;

define('URL', 'http://shemoks.hw.loc/');
require __DIR__ . '/../config/autoload.php';

$app = new Url($config);