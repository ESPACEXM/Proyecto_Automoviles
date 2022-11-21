<?php
session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
} 
?>

<div class="row">
    <div class="col-sm-12">
        <div align="center">
            <h4 class="m-t-0 m-b-40 header-title text-center"><b style="font-size: 25px; color:white;">SISTEMA DE GESTIÓN DE VENTAS E INVENTARIOS CON FACTURACIÓN ELECTRÓNICA EN LINEA</b></h4>
        
            <img src="assets/img/logos/logo1.png" width="25%" height="20%" style="border-radius: 150px;">
            
            <h4 class="m-t-0 m-b-40 header-title text-center"><b style="font-size: 20px; color:white;">BIENVENIDO</b></h4>
            <h4 class="m-t-0 m-b-40 header-title text-center"><b
                    style="font-size: 20px; color:white;">
                    <?php echo $_SESSION['user_nombre']." ".$_SESSION['user_apellido'];
                    ?></b></h4>
        </div>
    </div>
</div>

