
<?php
require_once('db.php');

// Получаем данные из формы регистрации
$First_Name = $_POST['First_Name'];
$Second_Name = $_POST['Second_Name'];
$Third_Name = $_POST['Third_Name'];
$Passport = $_POST['Passport'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$Cpassword = $_POST['Cpassword'];
$RolesId = $_POST['RolesId'];

//Поля
if (empty($First_Name) || empty($Second_Name) || empty($Third_Name) || empty($Passport) || empty($email) || empty($password)) {
    echo "Заполните все поля";
	$conn->close();
	return;
}


// Проверяем, совпадают ли пароль и его подтверждение
if ($password != $Cpassword) {
    echo "Пароли не совпадают";
	$conn->close();
	return;
}
else {
    // Создаем SQL-запрос для вставки данных в таблицу пользователей
    $sql = "INSERT INTO client (First_Name, Second_Name, Third_Name, Passport, Email, Password, RolesId) VALUES ('$First_Name','$Second_Name', '$Third_Name', '$Passport', '$email', '$password', 2)";
    if ($conn -> query($sql) === TRUE) {
        echo "Успех";
    }
    else {
        echo "Ошибка" . $conn->error;
    }
}
?>