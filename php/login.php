<?php
include "./conexion.php";
$email = $_POST ["email"];
$password = $_POST ["txtPassword"];

echo "Bienvenido $email Password; $password";
echo '<br>';
$query= "select * from users where USERNAME='$email' and PASSWORD='$password'";
$res = $conexion->query($query);
if(mysqli_num_rows($res) > 0){
    echo "LOGIN CORRECTO";
    $fila= mysqli_fetch_row($res);
    echo "USERNAME: ".$fila[1], "<br>";
    echo "DATE: ".$fila[2], "<br>";
    echo "FIRST_NAME: ".$fila[4], "<br>";
    echo "LAST_NAME: ".$fila[5], "<br>";
    



}else{
    echo "Datos No Validos";
}
?>