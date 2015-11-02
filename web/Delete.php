<?php
use Layer\Models\Model;

require __DIR__ . '/../config/autoload.php';

$model = new Model($config);
$model->table = $_POST['table5'];
$bool = $model->remove($_POST['field9']);
if ($bool) {
    echo "Запис видалено";
} else {
    echo "Запис не видалено, перевірте коректність даних";
}



