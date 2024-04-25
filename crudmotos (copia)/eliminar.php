<?php
$placa= $GET['placa'];

$db=new PDO('mysql:host=localhost;dbname=practicasgenios','root','');
$db->query("DELETE FROM motos WHERE placa='$placa';");

header("location:listar.php");
?>