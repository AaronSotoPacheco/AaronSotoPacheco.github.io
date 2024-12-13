
<?php
include "./php/conexion.php";
$sql="select * from tournament order by ID_TOURNAMENT ASC";
$res = $conexion->query($sql) or die($conexion->error);
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard MatchUP</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Asegurarse de que el contenedor principal ocupe toda la altura */
        html, body {
            height: 100%;
            margin: 0;
        }

        /* Asegurarse de que el aside ocupe todo el alto de la pantalla */
        .vh100 {
            height: 100vh;
            position: sticky;
            top: 0;
        }
        
        /* Asegurar que el contenido principal (main) no se superponga */
        main {
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <?php include "./layout/header.php" ?>

    <!-- Contenido Principal -->
    <div class="container-fluid ">
        <div class="row">
            <!-- Sidebar -->
            <aside class="bg-dark text-white col-lg-2 bg-light vh100">
                <h2 class="p-4 h4">
                    <a href="main-page.php"><img width="30px" src="img/logo_size_invert.webp" class="mx-1" style="border-radius: 30px;"></a>
                    MatchUP
                </h2>
                <ul class="nav flex-column mt-5">
                    <li class="nav-item h5 mx-2"><a href="user_dashboard.php" class="nav-link text-white"><i class="bi bi-house"></i>&nbsp; Inicio</a></li>
                    <li class="nav-item h5 mx-2"><a href="tournaments_active.php" class="nav-link text-white"><i class="bi bi-calendar4-event"></i>&nbsp; Torneos</a></li>
                    <li class="nav-item h5 mx-2"><a href="#" class="nav-link text-white"><i class="bi bi-joystick"></i>&nbsp; Eventos</a></li>
                </ul>
            </aside>

            <!-- Contenido -->
            <main class="col-md-9 col-lg-10">
                <h2 class="mb-4 mt-3">Bienvenido a MatchUp Interface</h2>
                <!-- Tarjetas de resumen -->
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <h5 class="card-title">Torneos Activos</h5>
                                <p class="card-text fs-4">5</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <h5 class="card-title">Partidas Jugadas</h5>
                                <p class="card-text fs-4">42</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-warning">
                            <div class="card-body">
                                <h5 class="card-title">Ranking Global</h5>
                                <p class="card-text fs-4">#12</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabla de torneos -->
                <h3 class="mt-5">Torneos Creados</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre del Torneo</th>
                           <th>Ruleset</th>
                            <th>Juego</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($fila = mysqli_fetch_array($res)) {
                        ?>
                        <tr>
                            <td><?php echo $fila['ID_TOURNAMENT'] ?></td>
                            <td><?php echo $fila['NAME'] ?></td>
                            <td><?php echo $fila['RULESET'] ?></td>
                            <td><?php echo $fila['ID_VIDEOGAME'] ?></td>
                            <td><?php echo $fila['STATUS'] ?></td>
                            <td><?php echo $fila['DATE'] ?></td>
                            
                            <td>
                                
                            <button class="btn btn-sm btn-primary btnEditar"  
    data-id="<?php echo $fila['ID_TOURNAMENT']; ?>"
    data-name="<?php echo $fila['NAME']; ?>"
    data-ruleset="<?php echo $fila['RULESET']; ?>"
    data-game="<?php echo $fila['ID_VIDEOGAME']; ?>"
    data-status="<?php echo $fila['STATUS']; ?>"
    data-date="<?php echo $fila['DATE']; ?>"
    data-bs-toggle="modal" 
    data-bs-target="#editModal"
>
  Editar
</button>

<td>
    <button class="btn btn-sm btn-primary btnView"    
  > Ver detalles</button>
</td>   
                            <td>
                            <form action="./php/tournament_delete.php" method="post" style="display:inline">
                      <input type="hidden" name="id" value="<?php echo $fila['ID_TOURNAMENT']?>">
                      <button class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Estas seguro?')">
                        Eliminar Torneo
                     
                      </button>
                      </form>
        
                </button>
       
</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </main>
           <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Datos del Torneo</h5>
                <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="./php/tournament_update.php" enctype="multipart/form-data"  method="post" id="editForm">
                <div class="modal-body">
                <input type="hidden" id="editId" name="editId">

                    <div class="mb-3">
                        <label for="editName" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="editName" name="editName" required>
                    </div>
                    <div class="mb-3">
                        <label for="editLast" class="form-label">Juego:</label>
                        <input type="text" class="form-control" id="editGame" name="editGame" required>
                    </div>
                    
            <div class="mb-3">
              <label for="type" class="form-label">Ruleset:</label>
              <select  name="editRuleset" class="form-select" id="editRuleset" required>
                <option value="Eliminacion Directa">Eliminación Directa</option>
                <option value="Formato suizo">Formato Suizo</option>
                <option value="Doble eliminacion">Doble Eliminacion</option>
              </select>
            </div>


                    <div class="mb-3">
              <label for="type" class="form-label">Estado:</label>
              <select  name="editStatus" class="form-select" id="editStatus" required>
                <option value="En progreso">En progreso</option>
                <option value="Finalizado">Finalizado</option>
                <option value="Inscripcion abierta">Inscripcion abierta</option>
              </select>
            </div>


                    <div class="mb-3">
                        <label for="editPassword" class="form-label">Fecha:</label>
                        <input type="date" class="form-control" id="editDate" name="editDate">
                    </div>
                    
            <div class="mb-3">
              <label for="file" class="form-label">Ingresa la imagen:</label>
              <input type="file" id="editImg" name="editImg" class="form-control"  required>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/users.js"></script>
    
</body>
</html>
<script>
  // Asegurarse de que el modal se llene con los datos del torneo
  document.querySelectorAll('.btnEditar').forEach(button => {
    button.addEventListener('click', function() {
      // Asignar los valores de los atributos data-* a los inputs del modal
      document.getElementById('editId').value = this.getAttribute('data-id');
      document.getElementById('editName').value = this.getAttribute('data-name');
      document.getElementById('editGame').value = this.getAttribute('data-game');
      document.getElementById('editRuleset').value = this.getAttribute('data-ruleset');
      document.getElementById('editStatus').value = this.getAttribute('data-status');
      document.getElementById('editDate').value = this.getAttribute('data-date');
    });
  });
</script>
