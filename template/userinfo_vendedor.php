<?php
session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
} 
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/diseño.css">
    

</head>
<body>
<header class="p-3 mb-3 border-bottom fondoHeader">
    

    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <img src="assets/img/logos/logo1.png" alt="mdo" width="100" height="90" class="rounded-circle">
        </a>
        
        <p class="h1">Sistema Vendedor</p>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <p style="font-size: 30px;">  <?php echo $_SESSION['username']." ".$_SESSION['roles'];
                    ?> </p>
        </ul>

        <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/img/fotos/user.png" width="50" height="50" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="controller/Usuarios/editar_perfil.php">Mi Perfil</a></li>
                <li><a class="dropdown-item" href="#">Configuración</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="controller/Login/cierre.php">Cerrar Sessión</a></li>

            </ul>
        </div>
        

        
    </div>
</header>
    
</body>

</html>
