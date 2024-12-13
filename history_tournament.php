<?php
include "./php/conexion.php";
$sql = "select TOURNAMENT.NAME, TOURNAMENT.RULESET, TOURNAMENT.STATUS, TOURNAMENT.IMAGE, TOURNAMENT.DATE, VIDEOGAME.NAME as VNAME from TOURNAMENT inner join VIDEOGAME on 
VIDEOGAME.ID_VIDEOGAME=TOURNAMENT.ID_VIDEOGAME where TOURNAMENT.STATUS='FINALIZADO'";
$res = $conexion->query($sql) or die($conexion->error);
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Torneos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?PHP include "./layout/header.php"
?>
    </nav>

    <div class="container mt-4">
        <h2 class="mb-4">Historial de Torneos</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre del Torneo</th>
                    <th>Juego</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                    <th>Detalles</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                        while($fila = mysqli_fetch_array($res)) {
                        ?>
                        <tr>
                            <td><?php echo $fila['NAME'] ?></td>
                            <td><?php echo $fila['VNAME'] ?></td>
                            <td><?php echo $fila['STATUS'] ?></td>
                            <td><?php echo $fila['DATE'] ?></td>
                            <td> <button>Ver detalles</button>
                        </td>
                 </tr>
                        <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>