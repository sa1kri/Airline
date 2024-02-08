<?php
require_once('db.php');

// Выполняем SQL-запрос для получения имени и фамилии из таблицы
$sql = "SELECT First_Name, Second_Name FROM Client";
$result = $conn->query($sql);

// Проверяем, есть ли записи в результате запроса
if ($result->num_rows > 0) {
    // Выводим данные каждой записи
    while ($row = $result->fetch_assoc()) {
        echo "Имя: " . $row["First_Name"]. " Фамилия: " . $row["Second_Name"]. "<br>";
    }
} else {
    echo "Нет записей в таблице";
}

// Закрываем подключение к базе данных
$conn->close();
?>