<?php session_start();
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
    echo "DATE: ".$fila[3], "<br>";
    echo "FIRST_NAME: ".$fila[5], "<br>";
    echo "LAST_NAME: ".$fila[6], "<br>";
    echo "LEVEL", $FILA[7],'<br>';
    $arr=['ID_USER'=>$fila[0], 'USERNAME' =>$fila[1], 'FIRST_NAME'=> $fila[5]];
    $_SESSION['userdata']=$arr;



    if($fila[8] == '1'){
        header("Location: ../dashboard.php");
    }else{
        header("Location: ../user_dashboard.php");
    }



}else{
    echo "Login incorrecto";
    header("Location: ../login.php?error=datos no validos ");
}
?>