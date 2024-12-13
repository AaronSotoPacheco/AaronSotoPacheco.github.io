<?php
include "./php/conexion.php";
$sql = "SELECT * FROM USERS ORDER BY ID_USER ASC";
$res = $conexion->query($sql) or die($conexion->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard de Usuarios</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <?php include "./layout/header.php" ?>

  <div class="container mt-5">
    <header class="text-center mb-4">
      <h1 class="display-4 text-white text-primary fw-bold text-center">Users</h1>
    </header>

    <!-- Tabla de Usuarios -->
    <section id="user-list">
      <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
          <h2 class="h5 mb-0">Registered Users</h2>
          <input type="text" id="search-user" class="form-control w-25" placeholder="Buscar usuario">
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead class="table-secondary">
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Registration date</th>
                <th>Level</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id="user-table">
              <!-- Aquí se cargan los usuarios -->
              <?php 
              while($fila = mysqli_fetch_array($res)) {
              ?>
              <tr>
                <td><?php echo $fila['ID_USER'] ?></td>
                <td><?php echo $fila['USERNAME'] ?></td>
                <td><?php echo $fila['EMAIL'] ?></td>
                <td><?php echo $fila['DATE_REGISTER'] ?></td>
                <td><?php echo $fila['USER_LEVEL'] ?></td>
                <td>
                  <!-- Botón para actualizar -->
                  <button class="btn btn-sm btn-warning btnUpdate"
                    data-id="<?php echo $fila['ID_USER']; ?>"
                    data-username="<?php echo $fila['USERNAME']; ?>"
                    data-email="<?php echo $fila['EMAIL']; ?>"
                    data-level="<?php echo $fila['USER_LEVEL']; ?>"
                    data-bs-toggle="modal" 
                    data-bs-target="#updateModal">
                    Actualizar
                  </button>
                  <form action="./php/user_delete.php" method="post" style="display:inline">
    <input type="hidden" name="id" value="<?php echo $fila['ID_USER']?>">
    <button class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Estas seguro?')">
        Eliminar usuario
    </button>
</form>

              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

  <!-- Modal para actualizar datos del usuario -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Actualizar Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Formulario de actualización -->
          <form action="./php/user_update.php" method="POST" id="updateForm">
            <input type="hidden" id="editId" name="editId">
            <div class="mb-3">
              <label for="editUsername" class="form-label">Username</label>
              <input type="text" class="form-control" id="editUsername" name="editUsername" required>
            </div>
            <div class="mb-3">
              <label for="editEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="editEmail" name="editEmail" required>
            </div>
            <div class="mb-3">
              <label for="editLevel" class="form-label">Level</label>
              <select class="form-select" id="editLevel" name="editLevel" required>
                <option value="1">Admin</option>
                <option value="2">User</option>
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Script para actualizar datos en el modal -->
  <script>
    // Esperar a que el DOM esté listo
    document.addEventListener("DOMContentLoaded", function() {
      const btnsUpdate = document.querySelectorAll('.btnUpdate');
      
      // Asignar un evento de clic a cada botón "Actualizar"
      btnsUpdate.forEach(function(btn) {
        btn.addEventListener('click', function() {
          // Obtener los valores de los atributos data- del botón
          const id = btn.getAttribute('data-id');
          const username = btn.getAttribute('data-username');
          const email = btn.getAttribute('data-email');
          const level = btn.getAttribute('data-level');
          
          // Establecer los valores en los campos del formulario del modal
          document.getElementById('editId').value = id;
          document.getElementById('editUsername').value = username;
          document.getElementById('editEmail').value = email;
          document.getElementById('editLevel').value = level;
        });
      });
    });
  </script>
</body>
</html>
