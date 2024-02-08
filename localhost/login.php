<?php
require('db.php');
// Получение данных из формы
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
  echo "Заполните все поля";
}
else {
  $sql = "SELECT * FROM client WHERE Email='$email' AND Password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
        $result = 0;
        // SQL запрос для выборки RolesId по Email
        $sql = "SELECT RolesId FROM client WHERE Email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Найдено совпадение, сохраняем значение RolesId
          $row = $result->fetch_assoc();
          $Role = -1;
          $Role = $row["RolesId"];

          if ($Role = 2) {
            header("Location: Client_Osnova.html");
          } 
          else {
            header("Location: Admin_Osnova.html");
          }
        }

        
  }
  else {
    echo "Нет такого пользователя";
  }  
}
?>