<?php
include "./php/conexion.php";
$sql="
select TOURNAMENT.NAME, TOURNAMENT.RULESET, TOURNAMENT.STATUS, TOURNAMENT.IMAGE, TOURNAMENT.DATE, VIDEOGAME.NAME as VNAME from TOURNAMENT inner join VIDEOGAME on 
VIDEOGAME.ID_VIDEOGAME=TOURNAMENT.ID_VIDEOGAME";
$res = $conexion->query($sql) or die($conexion->error);
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneos Activos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Asegurarse de que el contenedor principal ocupe toda la altura */
        html, body {
            height: 100%;
            margin: 0;
        }

        /* Sidebar a 100vh (altura completa de la pantalla) */
        .vh100 {
            height: 100vh;
            position: sticky;
            top: 0;
        }

        /* Contenido principal que ocupe el espacio restante */
        main {
            min-height: 100vh;
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Mejorar la visibilidad del sidebar (opcional) */
        aside {
            background-color: #343a40;
        }
    </style>
</head>

<body>

    <?php include "./layout/header.php"?>

    <div class="container-fluid ">
        <div class="row">
     
            <aside class="bg-dark text-white col-lg-2 vh100">
                <h2 class="p-4 h4">
                    <a href="main-page.php"><img width="30px" src="img/logo_size_invert.webp" class="mx-1" style="border-radius: 30px;"></a>
                 MatchUP  
                </h2>
                <ul class="nav flex-column mt-5">
                    <li class="nav-item h5 mx-2"><a href="user_dashboard.php" class="nav-link text-white"><i class="bi bi-house"></i>&nbsp; Inicio</a></li>
                    <li class="nav-item h5 mx-2"><a href="tournaments_active.php" class="nav-link text-white"><i class="bi bi-calendar4-event"></i>&nbsp; Torneos</a></li>
                    <li class="nav-item h5 mx-2"><a href="MAIN-PAGE.PHP" class="nav-link text-white"><i class="bi bi-joystick"></i>&nbsp; Eventos</a></li>
                </ul>
            </aside>

            <!-- Contenido principal -->
            <main class="col-lg-10">
                <h2 class="mb-4">Torneos Activos</h2>
                <div class="row g-4">
                    <!-- Tarjetas de torneo -->
                    <?php while ($fila = $res->fetch_assoc()) { ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="img/tournaments/<?php echo $fila['IMAGE']; ?>" class="card-img-top" alt="Torneo <?php echo $fila['IMAGE']; ?>" height="400px">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $fila['NAME']; ?></h5>
                                    <h5 class="card-title"><?php echo $fila['VNAME']; ?></h5>
                                    <p class="card-text">Estado: <?php echo $fila['STATUS']; ?></p>
                                    <p class="card-text">Fecha: <?php echo date('d M, Y', strtotime($fila['DATE'])); ?></p>
                                    <button class="btn btn-primary">Ver detalles</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
