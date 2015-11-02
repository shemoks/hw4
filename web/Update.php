<?php
use Layer\Models\Model;

require __DIR__ . '/../config/autoload.php';

$model = new Model($config);
$model->table = $_POST['table4'];
$model->id = $_POST['field7'];
$arr=array($_POST['field6'] => $_POST['field8']);
$bool = $model->update($arr,$model->id);
if ($bool) {
    echo "Запис оновлено";
} else {
    echo "Запис не оновлено, перевірте коректність даних";
}


