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
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>AGREGAR NUEVA<br>VENTA</h2>
            </section>
            
        </section>

        <form action="" class="form_contact">
            <h2>Ingresar datos</h2>
            <div class="user_info">
                <label for="names">Cliente</label>
                <input type="text" id="names" required="">

                <label for="names">Vendedor</label>
                <input type="text" id="phone">

                <label for="text">Vehiculo</label>
                <input type="text" id="email">

                <label for="mensaje">Observación</label>
                <textarea id="mensaje"></textarea>

                <button class="button-guardar">Guardar</button>
            </div>
        </form>

    </section>

</body>
    