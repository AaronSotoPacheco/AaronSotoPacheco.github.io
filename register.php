<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Tournament</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('img/img_register.webp') no-repeat center center fixed;
            background-size: cover;
        }
        .custom-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 50vh;

        }
        .user-icon {
            width: 80px;
            height: 80px;
            background-color: #007bff;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            margin: 0 auto 10px auto;
        }
    </style>
</head>
<body>
  
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="custom-container text-center">
            <!-- User Icon -->
            <div class="header"><!--CLOSE-->
                <a href="login.php" aria-label="close"><span class="close-btn"><i class="fa fa-times-circle" aria-hidden="true" style="margin-left: 250PX;  "></i></span></a><!--LINK LANDING PAGE-->
             </div><!--FIN CLOSE-->
            <div class="user-icon">
                <i class="bi bi-person"></i>
            </div>
            <!-- Title -->
            <h3 class="mb-4">Register</h3>
            <!-- Form -->
            <form action="./php/user_add.php" enctype="multipart/form-data" method="post">
                <!-- Tournament Name -->
                <div class="mb-3">
                    <label for="tournamentName" class="form-label">Email:</label>
                    <input type="text" id="tournamentName" name="txtEmail" class="form-control" placeholder="" required>
                </div>

                <!-- Ruleset -->
                <div class="mb-3">
                    <label for="tournamentName" class="form-label">Username:</label>
                    <input type="text" id="tournamentName" name="txtUsername" class="form-control" placeholder="" required>
                </div>


                <!-- Video Game -->
                <div class="mb-3">
                    <label for="tournamentName" class="form-label">Password:</label>
                    <input type="text" id="tournamentName" name="txtPassword" class="form-control" placeholder="" required>
                </div>


                <!-- Upload Image -->
                <div class="mb-3">
                    <label for="tournamentName" class="form-label">Fisrt Name:</label>
                    <input type="text" id="tournamentName" name="txtFName" class="form-control" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="tournamentName" class="form-label">Last Name:</label>
                    <input type="text" id="tournamentName" name="txtLName"class="form-control" placeholder="" required>
                </div>

                <div class="mb-3">
              <label for="file" class="form-label">Ingresa la  de usuario imagen:</label>
              <input type="file" id="file" name="img" class="form-control"  required>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
