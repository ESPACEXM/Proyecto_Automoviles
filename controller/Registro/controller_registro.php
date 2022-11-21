
<?php
include_once("../../model/functions.php");

session_start();


$nombre=$_POST["inNombre"];
$apellido=$_POST["inApellido"];
$usuario=$_POST["inUsuario"];
$password=$_POST["inPassword"];
$rol=$_POST["inRol"];








$conexion = mysqli_connect(SERVER, USERDB, PASSDB, DATABASE);
   
$sql_into = "INSERT INTO sistema.users
(usuario, password, nombres, apellidos, estado,rol)
VALUES('$usuario', '$password', '$nombre', '$apellido', 'activo','$rol');";
    
    if(mysqli_query($conexion,$sql_into)){
        header("location: ../../index.php");
    
    }else{
        echo "Error:".$sql_into."<br>".mysqli_error($conexion);
    
    }mysqli_close($conexion);

   
?>



