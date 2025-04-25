<?php
$log=$_GET["login"];
echo $log;
$conn=new PDO("mysql:host=localhost;dbname=pizzaria", "root", "");
$conn->exec("insert into users(login) values('{$log}')")
?>