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
            <h1 class="h2">Gestion de Ventas</h1>
        </div>
    </div>

    <div class="card-body">


        <div class="container">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-2" id="btnGestionVentas" name="btnGestionVentas" type="button"
                    data-bs-toggle="modal" data-bs-target="#formGestionVentas">Gestion de Ventas</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Abrir Venta</th>
                            <th scope="col">Cancelar</th>
                            <th scope="col">Anular</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                while ($fila = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <th><?php echo $fila['Abrir Venta']; ?></th>
                            <td><?php echo $fila['Cancelar']; ?></td>
                            <td><?php echo $fila['Anular']; ?></td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-warning me-md-2" id="btnAbrirVenta"
                                        name="btnAbrirVenta" type="button" onclick="abrirVenta(<?php echo $fila['id']; ?>);">Abrir Venta</button>
                                </div>
                            </td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-warning me-md-2" id="btnCancelarVenta"
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
    <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA AGREGAR USUARIOS -->
    <div class="modal fade" id="formGestionVenta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
           
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnAbrirVenta">Abrir Venta</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnCancelarVenta">Cancelar Venta</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnAnularVenta">Anular Venta</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>

    <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA AGREGAR USUARIOS -->
    <div class="modal fade" id="formActualizaUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnAbrir Venta">Abrir Venta</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnCancelar Venta">Cancelar Venta</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnAnularVenta">Anular Venta</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>