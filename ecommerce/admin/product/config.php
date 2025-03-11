<?php

$host = "localhost";
$user = "root";
$pass = "root";

$conn = new PDO("mysql:host=$host;dbname=products", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>