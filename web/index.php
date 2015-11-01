<?php

use Layer\Models\Database;

require __DIR__ . '/../config/autoload.php';

$connect = new Database($config);
if (!empty($connect)) {echo "Успішне підключення до бази";} else {echo "Немає підключення";}






