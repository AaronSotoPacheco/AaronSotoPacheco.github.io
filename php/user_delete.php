<?php  
include "./conexion.php";
$id=$_POST['id'];


echo "id: ".$id."<br>";

$con="delete from USERS where ID_USER= $id;";
$conexion->query($con) or die($conexion->error);
header("Location: ../users.php");
?>