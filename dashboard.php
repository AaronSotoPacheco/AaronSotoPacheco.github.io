<?php session_start();
if(isset($_SESSION['userdata'])){
$user=$_SESSION['userdata'];
}else{
header("Location: login.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="d-flex">
        <!--SIDEBAR-->
        <aside class="bg-dark text-white vh-100" style="width: 15%;">
          <h2 class="p-4 h4">
    
           <a href="main-page.php"><img width="30px" src="img/logo_size_invert.webp" class="mx-1" style="border-radius: 30px;"></a> 
            MatchUP
          </h2>
          <ul class="nav flex-column mt-3">
          <a href="./main-page.html"></a>  <li class="nav-item h5 mx-2"><a href="" class="nav-link text-white"><i class="bi bi-house"></i>&nbsp; Inicio</a>
            </li>
            <li class="nav-item h5 mx-2"><a href="tournaments_active.php" class="nav-link text-white"><i class="bi bi-calendar4-event"></i>&nbsp;
                Torneos</a>
            </li>
            <li class="nav-item h5 mx-2"><a href="users.php" class="nav-link text-white"><i class="bi bi-person-circle"></i>&nbsp;
                Usuario</a>
            </li>
            <li class="nav-item h5 mx-2"><a href="main-page.php" class="nav-link text-white"><i class="bi bi-joystick"></i></i>&nbsp;
              Eventos</a> </li>
            
          </ul>
        </li>
      


    
    
    
    
        </aside>
      
    
    
        <main class="bg-pearl flex-grow-1">
    
        
          <header>
            <nav class="px-4 navbar py-4 navbar-expand-lg bg-body-tertiary">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end px-4" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item mx-4">
                      <button type="button" class="btn btn-light position-relative">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                          9+
                          <span class="visually-hidden">unread messages</span>
                        </span>
                      </button>
                    </li>
                    <li class="nav-item">
                      <img src="./img/user_icon.jfif"
                        style="width: 30px; height: 30px; border-radius: 50%; border: 1px solid rgb(13, 106, 13);"
                        class="mt-1">
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php 
                        echo $user['USERNAME'];
                        ?>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person-bounding-box"></i>&nbsp; Perfil</a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./php/logout.php"><i class="bi bi-box-arrow-in-right"></i >&nbsp; LogOut</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
        <!--ROW STATS-->
        <div class="row mx-4 px-4 mt-5">
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h6><i class="bi bi-patch-plus"></i></i>&nbsp; Ingresos por Anuncios</h6>
                <h6 class="h3">$3000.00</h6>
              </div>
    
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h6><i class="bi bi-person-arms-up"></i>&nbsp; Usuarios Nuevos </h6>
                <h6 class="h3">52</h6>
              </div>
    
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h6><i class="bi bi-controller"></i>&nbsp; Videojuegos para torneos</h6>
                <h6 class="h3">30</h6>
              </div>
    
            </div>
          </div>
          
          
          
      <!--END ROW STATS -->
      
      </div>
      
      
      
      <div class="row m-4 px-4 my-4">
        <div class="col-6">
          <div class="card">
            <div class="card-header">Organizadores nuevos</div>
            <div class="card-body"> 
              <canvas id="chartIngresos"></canvas>
    
            </div>
          </div>
        </div>
      
    
        <div class="col-6">
          <div class="card">
            <div class="card-header">Juegos Mas Usados</div>
            <div class="card-body">
              <canvas id="chartCategorias">
    
              </canvas>
            </div>
          </div>
        </div>
    
    
      </div>
    </div>

</main>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>
  <script src="js/dashboard.js"></script>



</body>
</html>