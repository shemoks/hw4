<?php
use Layer\Models\Model;

require __DIR__ . '/../config/autoload.php';


$model = new Model($config);
$model->table = $_POST['table3'];
$arr = array('title' => $_POST['field2'], 'author' => $_POST['field3'], 'year_publication' => $_POST['field4'], 'count' => $_POST['field5']);
$bool = $model->insert($arr);
if ($bool) {
    echo "Запис додано";
} else {
    echo "Запис не додано, перевірте коректність даних";
}











