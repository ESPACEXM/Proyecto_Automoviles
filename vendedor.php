<?php
session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
} 

#IMPORTANDO EL TEMPLATE

#header
include 'template/header_vendedor.php';

#Userinfo
include 'template/userinfo_vendedor.php';

#Barra de menús
include 'template/menu_vendedor.php'
?>


<!-- INJECCIÓN DEL CONTENIDO DINAMICO  -->
<div class="wrapper">
<div class="container">
    

        <main class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
            <div class="container" id="contenedorPrincipal">

            </div>
        </main>

    
</div>
</div>


<?php
#footer
include 'template/footer.php'
?>

<script>
    $(document).ready(function () { 

        //INICIALIZAR EL EFECTO DEL ESTADO DEL SERVIDOR
        $body = $('body');
        $(document).on({
            ajaxStart: function () {
                $body.addClass('loading');
            },
            ajaxStop: function () {
                $body.removeClass('loading');
            }
        });
        
        //CARGANDO EL CONTENIDO PRINCIPAL
        cargarContenido('home.php');
    });
</script>