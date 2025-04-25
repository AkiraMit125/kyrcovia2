<?php
$conn=new PDO("mysql:host=localhost;dbname=pizzaria", "root", "");
$conn->exec("insert into users(login) values('Котяра'),('Кот')");
?>