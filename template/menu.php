<?php 
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light top-bar-margen" >
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse menuOpciones" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active menu_opcion" aria-current="page" href="main.php">
                        <i class="fa-solid fa-house-user"></i>
                        Inicio
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu_opcion" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Vehiculos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item " href="view/Propietario/addvehiculoView.php">Agregar Vehiculo</a></li> 
                        <li><a class="dropdown-item " href="view/Propietario/addmarcaView.php">Agregar Marca</a></li>    
                        <li><a class="dropdown-item " href="view/Propietario/addmodeloView.php">Agregar Modelo</a></li>    
                        <li><a class="dropdown-item " href="view/Propietario/addtipovehiculoView.php">Agregar tipo de Vehiculo</a></li>                                       
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu_opcion" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Roles
                    </a> 
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item " href="view/Propietario/modrolesView.php">Modificar Roles</a></li> 
                        
                    </ul>
                 </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu_opcion" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Clientes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item " href="view/Propietario/addclienteView.php">Agregar Cliente</a></li> 
                        <li><a class="dropdown-item " href="view/Propietario/modclienteView.php">Modificar Cliente</a></li>    
                        <li><a class="dropdown-item " href="view/Propietario/deleteclienteView.php">Eliminar Cliente</a></li>    
                    </li>                                       
                    </ul>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu_opcion" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Informes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item " href="view/Propietario/informes.php">Registros</a></li> 
                        
                    </ul>
                    <li class="nav-item dropdown">
                    
                    
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>