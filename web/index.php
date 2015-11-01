<?php

use Layer\Models\Database;
use Layer\Models\Model;

require __DIR__ . '/../config/autoload.php';

    $connect = new Database($config);
    if (!empty($connect)) {
        echo "Успішне підключення до бази";
    } else {
        echo "Немає підключення";
    }
    $table="books";
    $data = [
        'title'   => 'Война и мир.Том 2',
        'author' => 7,
        'year_publication' => 1865,
        'count' => 4
    ];

    $model = new Model($config);
    $model->setTable($table);
    $model->insert($data);






