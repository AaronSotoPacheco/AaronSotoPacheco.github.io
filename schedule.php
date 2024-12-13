<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/schedule.css">
</head>
<body>
    <!-- Barra de navegación -->
  <?php include "./layout/header.php"?>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <h2 class="mb-4 text-white">Schedule</h2>

        <!-- Navegación del calendario -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <button class="btn btn-primary btn-sm bg-dark">&lt; Semana Anterior</button>
            <h4 class="text-white">Semana del 27 de Noviembre - 3 de Diciembre</h4>
            <button class="btn btn-primary btn-sm bg-dark">Semana Siguiente &gt;</button>
        </div>

        <!-- Tabla del calendario -->
        <table class="table text-center">
            <thead>
                <tr class="bg-light">
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miércoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                    <th>Sábado</th>
                    <th>Domingo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="calendar-cell">
                        <h6 class="text-white">27 Nov</h6>
                        <div class="event">Torneo Valorant - 16:00</div>
                    </td>
                    <td class="calendar-cell ">
                        <h6 class="text-white">28 Nov</h6>
                        <div class="event">Torneo FIFA 23 - 18:00</div>
                    </td>
                    <td class="calendar-cell">
                        <h6 class="text-white">29 Nov</h6>
                        <div class="event">Torneo Apex Legends - 15:00</div>
                    </td>
                    <td class="calendar-cell">
                        <h6 class="text-white">30 Nov</h6>
                        <div class="event">Torneo Rocket League - 19:00</div>
                    </td>
                    <td class="calendar-cell">
                        <h6 class="text-white">1 Dic</h6>
                        <div class="event">Torneo Chess.com - 20:00</div>
                    </td>
                    <td class="calendar-cell">
                        <h6 class="text-white">2 Dic</h6>
                        <!-- Día libre -->
                    </td>
                    <td class="calendar-cell">
                        <h6 class="text-white">3 Dic</h6>
                        <div class="event">Final LoL Regional - 21:00</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
