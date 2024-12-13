<?php
include "conexion.php";

// Verifica si los datos han sido enviados
if(isset($_POST['editId']) && isset($_POST['editUsername']) && isset($_POST['editEmail']) && isset($_POST['editLevel'])){
    // Obtiene los datos del formulario
    $id = $_POST['editId'];
    $username = $_POST['editUsername'];
    $email = $_POST['editEmail'];
    $level = $_POST['editLevel'];
    
    // Prepara la consulta SQL para actualizar
    $sql = "UPDATE USERS SET USERNAME = ?, EMAIL = ?, USER_LEVEL = ? WHERE ID_USER = ?";
    
    // Prepara la consulta
    if($stmt = $conexion->prepare($sql)){
        // Vincula los parámetros
        $stmt->bind_param("ssii", $username, $email, $level, $id);
        
        // Ejecuta la consulta
        if($stmt->execute()){
            echo "<script>alert('Usuario actualizado con éxito'); window.location.href='../users.php';</script>";
        } else {
            echo "<script>alert('Error al actualizar'); window.location.href='../users.php';</script>";
        }
        
        // Cierra la sentencia
        $stmt->close();
    } else {
        echo "<script>alert('Error en la consulta'); window.location.href='../users.php';</script>";
    }
} else {
    echo "<script>alert('Por favor complete todos los campos'); window.location.href='../users.php';</script>";
}
?>
 