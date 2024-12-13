<?php 
include "./conexion.php";
$name=$_POST['txtName'];
$rule=$_POST['txtRule'];
$videogame=$_POST['txtVideogame'];
$attendees=$_POST['txtAtten'];
$fecha=date('Y-m-d');
$file_name = $_FILES['txtImg']['name'];

$attendees = $_POST['txtAtten'];
if (!is_numeric($attendees) || $attendees <= 0) {
    echo "El número de asistentes debe ser un número positivo.";
    exit;
}
$temp = explode(".",$file_name);
$ext = end($temp);
$new_name=date('V_m_d_h_i_s').rand(1000,9999).".".$ext;
echo $file_name;
$destino="../img/tournaments/";
if(move_uploaded_file($_FILES['txtImg']['tmp_name'], $destino.$new_name)){
    echo "archivo subido correctamente";
$con="insert into TOURNAMENT values (0,'$name','$rule', '$attendees', '$videogame', '$new_name', 'En progreso', '$fecha')";
$conexion->query($con) or die ($conexion->error);
header("Location: ../user_dashboard.php"); 
}else{
    echo "no se pudo subir el archivo";
}
die();
?>