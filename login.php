
<?php
if(isset($_GET['error'])){
    $error= $_GET['error'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login page">
    <title>Login</title>
    <link rel="stylesheet" href="css/media-query-login.css">
    <link rel="stylesheet" href="css/login-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="container"><!--Container-->
        <div class="image"><!--DIV IMAGE-->
            <img src="img/img_login.webp" alt="">
        </div><!--FIN IMAGE-->
        <div class="login"><!--LOGIN-->
            <div class="header"><!--CLOSE-->
               <a href="main-page.php" aria-label="close"><span class="close-btn"><i class="fa fa-times-circle" aria-hidden="true"></i></span></a><!--LINK LANDING PAGE-->
            </div><!--FIN CLOSE-->
            <H1>Welcome<br>To MatchUP</H1><!--Titulo-->
            
            

            <form class="login-body" action="./php/login.php" method="post">
                <label for="email">EMAIL</label>
                <div class="inputs"><!--input-->

                    <input type="text" id="email" name="email" placeholder="example@gmail.com">
                </div><!--FIN DE INPUT-->

                <label for="Password">Password</label>
                <div class="inputs"><!--input-->

                    <input type="password" name="txtPassword" id="password" placeholder="*******">
                </div><!--FIN INPUT-->

                <button type="submit">Login</button><!--boton login-->
                 <p>do you don't have an account? <a href="./register.php">Register Now<a></p>
                    <br><br>
                    <label for="Social Login">You can Login with</label>

                        <button class="google-btn" style="color: #2d2d2d;">Login with Google</button>
                       
                        <button class="facebook-btn" style="color: #2d2d2d;">Login with Facebook</button>
                 
          
            </form>
           
        </div><!--FIN LOGIN-->

    </div><!---Fin del Contenedor-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 
    if(isset($error)){
    
    ?>
    <script>Swal.fire({
  icon: "error",
  title: "Error...",
  text: "Credenciales incorrectas",
});</script>

<?php    

}
?>

</body>

</html>