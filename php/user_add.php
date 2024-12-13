<?php 
include "./conexion.php";
$email=$_POST['txtEmail'];
$username=$_POST['txtUsername'];
$password=$_POST['txtPassword'];
$first_name=$_POST['txtFName'];
$last_name=$_POST['txtLName'];
$fecha=date('Y-m-d');

$file_name = $_FILES['img']['name'];
$temp = explode(".",$file_name);
$ext = end($temp);
$new_name=date('U_m_d_h_i_s').rand(1000,9999).".".$ext;
echo $file_name;
$destino="../img/users/";


$con="insert into USERS values (0,'$username','$email', '$fecha', '$password', '$first_name', '$last_name', '$new_name','2')";
$conexion->query($con) or die ($conexion->error);

echo "\n registro insertado correctamente";
header("Location: ../login.php");
echo $con;
