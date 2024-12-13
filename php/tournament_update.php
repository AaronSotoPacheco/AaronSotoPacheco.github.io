<?php
include "./conexion.php";

// Obtener los datos del formulario
$name = mysqli_real_escape_string($conexion, $_POST['editName']);
$game = mysqli_real_escape_string($conexion, $_POST['editGame']);
$status = mysqli_real_escape_string($conexion, $_POST['editStatus']);
$date = mysqli_real_escape_string($conexion, $_POST['editDate']);
$ruleset = mysqli_real_escape_string($conexion, $_POST['editRuleset']);
$id = mysqli_real_escape_string($conexion, $_POST['editId']);

// Manejo del archivo
$file_name = $_FILES['editImg']['name'];
$temp = explode(".", $file_name);
$ext = strtolower(end($temp)); // Convertir extensión a minúsculas
$new_name = date('V_m_d_h_i_s').rand(1000,9999).".".$ext;
$destino = "../img/tournaments/";

// Validar el tipo de archivo (asegurarse que es una imagen)
$allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
if (!in_array($ext, $allowed_extensions)) {
    echo "Tipo de archivo no permitido. Solo imágenes JPG, JPEG, PNG y GIF son válidas.";
    die();
}

// Verificar si el archivo se subió correctamente
if (move_uploaded_file($_FILES['editImg']['tmp_name'], $destino.$new_name)) {
    echo "Archivo subido correctamente";

    // Actualizar la base de datos
    $con = "UPDATE TOURNAMENT SET 
            NAME='$name', 
            RULESET='$ruleset',
            ID_VIDEOGAME='$game',
            IMAGE='$new_name',
            STATUS='$status',
            DATE='$date' 
            WHERE ID_TOURNAMENT='$id'";

    if ($conexion->query($con)) {
        // Redirigir después de la actualización exitosa
        header("Location: ../user_dashboard.php");
        exit(); // Asegurarse de que el script se detenga después de la redirección
    } else {
        echo "Error al actualizar el torneo: " . $conexion->error;
    }

} else {
    echo "No se pudo subir el archivo. Verifique los permisos de la carpeta de destino.";
}

die();
?>
