<?php
$conn=new PDO("mysql:host=localhost;dbname=pizzaria", "root", "");
$conn-> exec ("CREATE TABLE users(
            id INT PRIMARY KEY AUTO_INCREMENT,
            login VARCHAR(50)
            )");
?>
