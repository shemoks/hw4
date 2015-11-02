<!DOCTYPE html>
<html >
<link rel="stylesheet" type="text/css" href="style.css">
<head>
    <meta charset="UTF-8">
    <title>HomeWork 4</title>
</head>
<body>
<h1>Робота з базою даних</h1>
<form action="ViewTable.php" method="post" id="connect">
    <h2>Вивід даних таблиці</h2>
    <div class="select">
        <label>Таблиця:
            <input type="text" name="table"/>
        </label><br><br>
        <input type="submit" value="Показати">
</form>
        <form action="Delete.php" method="post" id="delete" >
            <div class="delete">
                <h2>Видалити запис  таблиці Books</h2>
                <label>Таблиця:
                    <input type="text" name = "table5" value="books"/>
                </label><br><br>
                <label>Номер запису:
                    <input type="text" name = "field9"/>
                </label><br><br>
                <input type="submit" value = "Удалити">
            </div>
        </form>
    </div>
<form action="SelectCriterion.php" method="post" id="connect">
    <h2>Пошук даних таблиці</h2>
    <div class="find">
        <label>Таблиця:
            <input type="text" name="table1"/>
        </label><br><br>
        <label>Критерій/поле:
            <input type="text" name="criterion1"/>
        </label>
        <label>Значення:
            <input type="text" name="number1"/>
        </label><br><br>
        <label>Критерій/поле:
            <input type="text" name="criterion2"/>
        </label>
        <label>Значення:
            <input type="text" name="number2"/>
        </label>
        <input type="submit" value="Показати">
    </div>
</form>
<form action="Insert.php" method="post" id="connect">
    <h2>Додати запис до таблиці Books</h2>
    <div class="insert">
        <label>Таблиця:
            <input type="text" name="table3" value="books"/>
        </label><br><br>
        <label>Назва:
            <input type="text" name="field2"/>
        </label>
        <label>Автор:
            <input type="text" name="field3"/>
        </label><br><br>
        <label>Рік публікації:
            <input type="text" name="field4"/>
        </label>
        <label>Кількість:
            <input type="text" name="field5"/>
        </label>
        <input type="submit" value="Додати">
        <form action="Update.php" method="post" id="connect" >
             <div class="update">
                <h2>Оновити записи  таблиці Books</h2>
                <label>Таблиця:
                    <input type="text" name = "table4" value="books"/>
                </label><br><br>
                <label>Номер запису:
                    <input type="text" name = "field7"/>
                </label><br><br>
                <label>Поле:
                    <input type="text" name = "field6"/>
                </label><br><br>
                <label>Значення:
                    <input type="text" name = "field8"/>
                </label><br><br>
                <input type="submit" value = "Оновити">
            </div>
        </form>
    </div>
</form>
</body>
</html>










