<?php  
include "./conexion.php";
$id=$_POST['id'];


echo "id: ".$id."<br>";

$con="delete from TOURNAMENT where ID_TOURNAMENT = $id;";
$conexion->query($con) or die($conexion->error);
header("Location: ../user_dashboard.php");
?>