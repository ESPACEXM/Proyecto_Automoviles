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
                    <a class="nav-link active menu_opcion" aria-current="page" href="vendedor.php">
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
                        <li><a class="dropdown-item " href="view/Vendedor/vehiculosView.php">Ver vehiculos</a></li>                                                
                    </ul>
                    
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu_opcion" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ventas
                    </a> 
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item " href="view/Vendedor/ventasView.php">Nueva Venta</a></li>    
                        <li><a class="dropdown-item " href="view/Vendedor/ventasGestionView.php">Gestionar Venta</a></li>                                                
                    </ul>
                    
                 </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu_opcion" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Clientes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item " href="view/Vendedor/addclientesView.php">Agregar Clientes</a></li>                                                
                        <li><a class="dropdown-item " href="view/Vendedor/modclientesView.php">Modificar Clientes</a></li>                                                
                    
                    
                    
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>