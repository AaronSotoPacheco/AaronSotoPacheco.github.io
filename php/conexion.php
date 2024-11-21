<?php
$server="localhost";
$user="root";
$pass="";
$db="matchup";
//$conexion = new mysqli($server, $user, $pass, $db);
$conexion= new mysqli($server, $user, $pass, $db);
if($conexion ->connect_error){
    die("no se pudo conectar el mysql, prende el mysql");
}
?>