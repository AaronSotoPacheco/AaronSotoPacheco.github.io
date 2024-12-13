<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard de Torneos</title>

  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet">
</head>
<body class="bg-dark">
<?php include "./layout/header.php" ?>
  <div class="container mt-2">
  
    <header class="text-center mb-4 ">
      <h1 class="display-4 text-white text-primary fw-bold text-center" >Tournaments</h1>
    </header>

    <section id="create-tournament" class="mb-5 ">
      <div class="card shadow ">
        <div class="card-header bg-primary text-white bg-dark">
          <h2 class="h5 mb-0">Create Tournament</h2>
        </div>
        <div class="card-body ">
          <form action="./php/tournament_add.php" enctype="multipart/form-data" method="post"  id="tournament-form">
            <div class="mb-3">
              <label for="name" class="form-label">Tournament name:</label>
              <input type="text" id="name" name="txtName" class="form-control" placeholder="Ej. Copa de Verano" required>
            </div>

            <div class="mb-3">
              <label for="type" class="form-label">Ruleset:</label>
              <select id="type" name="txtRule" class="form-select" required>
                <option value="eliminacion directa">Eliminación Directa</option>
                <option value="formato_suizo">Formato Suizo</option>
                <option value="doble_eliminacion">Doble Eliminacion</option>
              </select>
            </div>
            <div class="mb-3">
  <label for="videogame" class="form-label">VideoGame:</label>
  <select id="videogame" name="txtVideogame" class="form-select" required>
    <option value="1">Fornite</option>
    <option value="2">League of Legends</option>
    <option value="3">Super Smash Bros Ultimate</option>
  </select>
</div>

<div class="mb-3">
  <label for="participants" class="form-label">Attendees</label>
  <input type="number" id="participants" name="txtAtten" class="form-control" placeholder="Ej. 16" required>
</div>


            <div class="mb-3">
              <label for="file" class="form-label">Ingresa la imagen:</label>
              <input type="file" id="file" name="txtImg" class="form-control"  required>
                </div>

            <button type="submit" class="btn btn-primary w-100">Crear Torneo</button>
          </form>
        </div>
      </div>
    </section>

  </div>

 
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  </script>
  
  <script src="script.js"></script>
</body>
</html>
