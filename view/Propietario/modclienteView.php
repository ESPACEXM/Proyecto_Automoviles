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
                
            
            <div class="table-responsive" >
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">EDITAR</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                while ($fila = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <th><?php echo $fila['id']; ?></th>
                            <td><?php echo $fila['nombres']." ".$fila['apellidos']; ?></td>
                            <td><?php echo $fila['usuario']; ?></td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-warning me-md-2" id="btnEditarUsuario"
                                        name="btnEditarUsuario" type="button" onclick="obtenerUsuario(<?php echo $fila['id']; ?>);">Editar</button>
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
    