

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Landing page">
    <title>Document</title>
    <link rel="stylesheet" href="css/main-page.css">
    <link rel="stylesheet" href="css/media-query-mainPage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
 <!--SIDEBAR-->
<?php include "./layout/aside.php"
?>
    <header class="header">
       <h1>MatchUp</h1>
        <p>Competitive community</p>
        <div class="header-buttons">
            <button>Organize An Event</button>
            <button>Find Events</button>
        </div>
        <!--<main class="content">
            <section class="tournaments-section">
                <h2 style="color:#111;">Featured Tournaments</h2>
                <div class="tournaments-container">
                    <div class="tournament-card">
                        <img src="img/tourment_1.jpg" alt="Champions Road Opens 2024">
                        <div class="card-info">
                            <h3>Champions Road Opens 2024</h3>
                            <p>SSBU</p>
                            <p>Aug 23rd - Sep 22nd, 2024</p>
                            <p>Online</p>
                            <p>8,313 Attendees</p>
                        </div>
                    </div>
                    <div class="tournament-card">
                        <img src="img/tourment_2.jfif" alt="Overwatch Galaxy Home...">
                        <div class="card-info">
                            <h3>Overwatch Galaxy Home...</h3>
                            <p>Overwatch 2</p>
                            <p>Jan 2nd - Jan 29th, 2024</p>
                            <p>Madrid, Mad</p>
                            <p>1,510 Attendees</p>
                        </div>
                    </div>
                    <div class="tournament-card">
                        <img src="img/tourment_3.jpg" alt="East Coast Revival 2024">
                        <div class="card-info">
                            <h3>East Coast Revival 2024</h3>
                            <p>CapCom vs SNK 2</p>
                            <p>Aug 30rd - Sep 19th, 2024</p>
                            <p>Hartford, Ct</p>
                            <br>
                        </div>
                    </div>
                </div>
            </section>-->
            <section class="mt-5">
                <h2 class="text-center mb-4">Featured Tournaments</h2>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card bg-dark text-light">
                            <img src="img/tourment_1.jpg" class="card-img-top" alt="Champions Road Opens 2024">
                            <div class="card-body">
                                <h5 class="card-title">Champions Road Opens 2024</h5>
                                <p class="card-text">
                                    SSBU<br>
                                    Aug 23rd - Sep 22nd, 2024<br>
                                    Online<br>
                                    8,313 Attendees
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card bg-dark text-light">
                            <img src="img/tourment_2.jfif" class="card-img-top" alt="Overwatch Galaxy Home...">
                            <div class="card-body">
                                <h5 class="card-title">Overwatch Galaxy Home...</h5>
                                <p class="card-text">
                                    Overwatch 2<br>
                                    Jan 2nd - Jan 29th, 2024<br>
                                    Madrid, Mad<br>
                                    1,510 Attendees
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card bg-dark text-light">
                            <img src="img/tourment_3.jpg" class="card-img-top" alt="East Coast Revival 2024">
                            <div class="card-body">
                                <h5 class="card-title">East Coast Revival 2024</h5>
                                <p class="card-text">
                                    CapCom vs SNK 2<br>
                                    Aug 30th - Sep 19th, 2024<br>
                                    Hartford, Ct<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>
  <script src="js/index.js"></script>

    </header>

  
</html>