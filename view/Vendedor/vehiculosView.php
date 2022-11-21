<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../../index.php");
}

include_once("../../model/functions.php");

$usrClass = new usuariosModel();

$result = array();
$resultRoles = array();
$result = $usrClass->getVehiculos();


?>
<script src="assets/js/moduloUsuarios.js"></script>
<link rel="stylesheet" href="../../assets/css/temas.css">
<div class="card">
    
<section class="webdesigntuts-workshop">
	<form action="" method="POST">		    
		<input type="search" placeholder="Buscar Cliente">		    	
		<button>Search</button>
	</form>
</section>
    <div class="card-body">


        <div class="container">
            
            <div class="table-responsive">
                <table class="table-3">
                    <thead>
                        <tr>
                            <th scope="col">Marca</th>
                            <th scope="col">Tipo de vehiculo</th>
                            <th scope="col">Puertas</th>
                            <th scope="col">Año</th>
                            <th scope="col">Estado</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                while ($fila = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <td><?php echo $fila['nombre'];?></td>
                            <td><?php echo $fila['nombre']; ?></td>
                            <td><?php echo $fila['puertas']; ?></td>
                            <td><?php echo $fila['año']; ?></td>
                            <td><?php echo $fila['estado']; ?></td>
                         
                           
                        </tr>

                    <?php 
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    