<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../../index.php");
}

include_once("../../model/functions.php");



$result = array();
$resultRoles = array();


?>
<script src="assets/js/moduloUsuarios.js"></script>
<link rel="stylesheet" href="../../assets/css/temas.css">
<div class="card">
    <div class="card-header">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">LISTADO DE MARCAS</h1>
        </div>
    </div>

    <div class="card-body">


        <div class="container">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-2" id="btnNuevoUsuario" name="btnNuevoUsuario" type="button"
                    data-bs-toggle="modal" data-bs-target="#formNuevoUsuario">Nueva Marca</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                            
                            <th scope="col">MARCA</th>
                            <th scope="col">EDITAR</th>
                            <th scope="col">ELEMINAR</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                while ($fila = mysqli_fetch_array($result)){
                    ?>
                         <tr>
                       
                            <td><?php echo $fila['marca']; ?></td>
                           
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-warning me-md-2" id="btnEditarAutomovil"
                                        name="btnEditarAutomovil" type="button" onclick="obtenerAutomovil(<?php echo $fila['id']; ?>);">Editar</button>
                                </div>
                            </td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-danger me-md-2" id="btnEliminarAutomovil"
                                        onclick="eliminarAutomovil(<?php echo $fila['id']; ?>);" name="btnEliminarAutomovil"
                                        type="button">Eliminar</button>
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
    <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA AGREGAR USUARIOS -->
    <div class="modal fade" id="formNuevoUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formNuevoUsuario">Nueva Marca</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombres" placeholder="aqui va tu nombre">
                        <label for="nombres">Agregar Marca</label>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnAgregarUsuario">Agregar Marca</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
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
                    <h5 class="modal-title" id="formActualizaUsuario">Agregar Marca</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="id_upd">
                        <label for="id_upd">ID</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombres_upd" placeholder="aqui va tu nombre">
                        <label for="nombres_upd">Agregar Marca</label>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnActualizarUsuario">Actualizar Marca</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>