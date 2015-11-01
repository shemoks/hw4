<?php

use Layer\Models\Model;


require __DIR__ . '/../config/autoload.php';

    if (empty($_POST['table'])) {
        echo "Введіть назву таблиці";
    } else {
        $model = new Model($config);
        $model->table = $_POST['table'];
        $model->id = 9;
        $result = $model->findAll();
        foreach($result as $row){
            foreach($row as $column => $value){
                echo "   |   ".$column."  |  ".$value;
            }
                echo "<br>";
        }

    }




