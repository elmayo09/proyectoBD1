<?php
$host = "localhost";
$user = "user";
$pass = "1234";
$DB = "supropiedadraiz";
$conn = mysqli_connect($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));
?>