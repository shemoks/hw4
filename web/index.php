<!DOCTYPE html>
<html >
<link rel="stylesheet" type="text/css" href="style.css">
<head>
    <meta charset="UTF-8">
    <title>HomeWork 4</title>
</head>
<body>
<h1>Робота з базою даних</h1>
<form action="viewTable.php" method="post" id="connect">
    <h2>Вивід даних таблиці</h2>
    <div class="select">
        <label>Таблиця:
            <input type="text" name="table"/>
        </label><br><br>
        <input type="submit" value="Показати">
    </div>
</form>
<form action="" method="post" id="connect">
    <h2>Пошук даних таблиці</h2>
    <div class="find">
        <label>Таблиця:
            <input type="text" name="table1"/>
        </label><br><br>
        <label>Критерій/поле:
            <input type="text" name="criterion1"/>
        </label>
        <label>Знак:
            <input type="text" name="sign"/>
        </label>
        <label>Значення:
            <input type="text" name="number"/>
        </label>
        <input type="submit" value="Показати">
    </div>
</form>
</body>
</html>










