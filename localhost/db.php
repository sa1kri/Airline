<?php
    $servername = "localhost";
    $username = 'root';
    $password = 'root';
    $database = 'bahmut airline';

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Ошибка". mysqli_connect_error());
        return;
    }
    // else{
    //     echo "Успех" ;
    //     exit;
    // }
?>