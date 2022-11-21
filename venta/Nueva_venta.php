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
            <h1 class="h2">Nueva Venta</h1>
        </div>
    </div>

    <div class="card-body">


        <div class="container">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-2" id="btnAgregarVenta" name="btnAgregarVenta" type="button"
                    data-bs-toggle="modal" data-bs-target="#formAgregarVenta">Nuevo Usuario</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Observaciones</th>
                            <th scope="col">Fecha de venta</th>
                            <th scope="col">Estado de proceso</th>
                            <th scope="col">Agregar venta</th>
                            <th scope="col">Pagar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                while ($fila = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <th><?php echo $fila['id']; ?></th>
                            <td><?php echo $fila['Cliente']; ?></td>
                            <td><?php echo $fila['Observaciones']; ?></td>
                            <td><?php echo $fila['Fecha de venta']; ?></td>
                            <td><?php echo $fila['Estado de proceso']; ?></td>
                            <td><?php echo $fila['Agregar venta']; ?></td>
                            <td><?php echo $fila['Pagar']; ?></td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-warning me-md-2" id="btnAgregarVenta"
                                        name="btnAgregarVenta" type="button" onclick="agregarUsuario(<?php echo $fila['id']; ?>);">Agregar Venta</button>
                                </div>
                            </td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-danger me-md-2" id="btnEliminarUsuario"
                                        onclick="pagarVenta(<?php echo $fila['id']; ?>);" name="btnPagarVenta"
                                        type="button">Pagar Venta</button>
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
    <div class="modal fade" id="formAgregarVenta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formAgregarVenta">Nueva Venta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Cliente" placeholder="Nombre del Cliente">
                        <label for="Cliente">Cliente</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Observaciones" placeholder="Observaciones de la Venta">
                        <label for="Observaciones">Observaciones</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="usuario" placeholder="username">
                        <label for="usuario">Username</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="aqui va tu clave">
                        <label for="password">Clave</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnAgregarUsuario">Agregar Usuario</button>
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
                    <h5 class="modal-title" id="formActualizaUsuario">Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="id_upd">
                        <label for="id_upd">ID</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombres_upd" placeholder="aqui va tu nombre">
                        <label for="nombres_upd">Nombres</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="apellidos_upd" placeholder="aqui va tu apellido">
                        <label for="apellidos_upd">Apellidos</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="usuario_upd" placeholder="username">
                        <label for="usuario_upd">Username</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="password_upd" placeholder="aqui va tu clave">
                        <label for="password_upd">Clave</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnActualizarUsuario">Actualizar Usuario</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>