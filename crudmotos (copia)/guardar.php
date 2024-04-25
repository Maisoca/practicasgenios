<?php

$placa  = $_POST['placa'];
$modelo     = $_POST['modelo'];
$color     = $_POST['color'];
$marca       = $_POST['marca'];

$db = new PDO('mysql:host=localhost;dbname=practicasgenios','root','');

$db->query("INSERT INTO motos VALUES('$placa','$modelo','$color','$marca');");

header("location:listar.php");

?>