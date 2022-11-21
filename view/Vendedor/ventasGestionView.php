<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../../index.php");
}

include_once("../../model/functions.php");

$usrClass = new usuariosModel();

$result = array();
$resultRoles = array();
$result = $usrClass->getUsuarios();

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
            <div class="table-responsive">
                <table class="table-2">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRES</th>
                            <th scope="col">USUARIO</th>
                            <th scope="col">CERRAR VENTA</th>
                            <th scope="col">GESTIONES</th>
                            


                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                while ($fila = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <th><?php echo $fila['id']; ?></th>
                            <td><?php echo $fila['nombres']; ?></td>
                            <td><?php echo $fila['usuario']; ?></td>
                            <td>

            
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="cancel" id="btnCancelarVenta"
                                        name="btnCancelarVenta" type="button" onclick="cancelarVenta(<?php echo $fila['id']; ?>);">Cerrar Venta</button>
                                </div>
                            </td>
                            <td>

            
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="cancel" id="btnCancelarVenta"
                                        name="btnCancelarVenta" type="button" onclick="cancelarVenta(<?php echo $fila['id']; ?>);">Cancelar Venta</button>
                                </div>
                            </td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-danger me-md-2" id="btnAnularVenta"
                                        onclick="anularVenta(<?php echo $fila['id']; ?>);" name="btnAnular Venta"
                                        type="button">Anular Venta</button>
                                </div>
                            </td>
                        </tr>

                    <?php 
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
   