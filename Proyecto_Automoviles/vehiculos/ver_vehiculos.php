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
<div class="card">
    <div class="card-header">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">LISTADO DE USUARIOS</h1>
        </div>
    </div>

    <div class="card-body">


        <div class="container">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-2" id="btnVerVehiculos" name="btnVerVehiculos" type="button"
                    data-bs-toggle="modal" data-bs-target="#formVerVehiculos">Vehiculos</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Linea</th>
                            <th scope="col">Numero de chasis</th>
                            <th scope="col">Año</th>
                            <th scope="col">ESTADO</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                while ($fila = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <th><?php echo $fila['id']; ?></th>
                            <td><?php echo $fila['marca']." ".$fila['apellidos']; ?></td>
                            <td><?php echo $fila['linea']; ?></td>
                            <td><?php echo $fila['nunmero de chasis']; ?></td>
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
    <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA AGREGAR USUARIOS -->
    <div class="modal fade" id="formVerClientes" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formVerClientes">Ver Vehiculos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="marca" placeholder="aqui va tu nombre">
                        <label for="marca">Marca</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="linea" placeholder="aqui va tu apellido">
                        <label for="linea">Linea</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="NumeroChasis" placeholder="Numero de Chasis">
                        <label for="NumeroChasis">Numero de chasis</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="año" class="form-control" id="año" placeholder="Año del vehiculo">
                        <label for="año">Año</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="Estado" class="form-control" id="Estado" placeholder="Estado del vehiculo">
                        <label for="Estado">Estado</label>
                    </div>

                </div>
                

            </div>
        </div>
    </div>

    <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA AGREGAR USUARIOS -->
    <div class="modal fade" id="formActualizaUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formActualizaUsuario">Vehiculos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="id_upd">
                        <label for="id_upd">ID</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="marca_upd" placeholder="aqui va tu nombre">
                        <label for="marca_upd">Marca</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="linea_upd" placeholder="Linea del vehiculo">
                        <label for="linea_upd">Linea</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="numerochasis_upd" placeholder="Numero de chasis">
                        <label for="numerochasis_upd">Numero de Chasis</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="ano_upd" placeholder="Año del vehiculo">
                        <label for="ano_upd">Año</label>
                    </div>

                </div>
            
            </div>
        </div>
    </div>