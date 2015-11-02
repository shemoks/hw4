<?php

use Layer\Models\Model;

require __DIR__ . '/../config/autoload.php';

$model = new Model($config);
$model->table = $_POST['table1'];
if (!empty($_POST['criterion1']) && !empty($_POST['number1']) && empty($_POST['criterion2']) && empty($_POST['number2'])) {
    $arr = array($_POST['criterion1'] => $_POST['number1']);
    $array = $_POST['criterion1'];
};
if (empty($_POST['criterion1']) && empty($_POST['number1']) && !empty($_POST['criterion2']) && !empty($_POST['number2'])) {
    $arr = array($_POST['criterion2'] => $_POST['number2']);
    $array = $_POST['criterion2'];
}
if (!empty($_POST['criterion1']) && !empty($_POST['number1']) && !empty($_POST['criterion2']) && !empty($_POST['number2'])) {
    $arr = array($_POST['criterion1'] => $_POST['number1'], $_POST['criterion2'] => $_POST['number2']);
    $array = array($_POST['criterion1'], $_POST['criterion2']);
}
$result = $model->findBy($array, $arr);
foreach ($result as $row) {
    foreach ($row as $column => $value) {
        echo "   |   " . $column . "  |  " . $value;
    }
    echo "<br>";
}



