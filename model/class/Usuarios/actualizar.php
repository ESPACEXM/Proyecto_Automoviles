
<?php
include_once("model/functions.php");
session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
} 
$usuario_upd = $_POST['user_upd'];
$apellido_upd = $_POST['apellido_upd'];
$clave_upd = $_POST['clave_upd'];
$nombre_upd = $_POST['nombre_upd'];
$rol_upd = $_POST['rol_upd'];

$us_id = $_SESSION['user_id'];



$conexion = mysqli_connect(SERVER, USERDB, PASSDB, DATABASE);
   
    $sql_update = "UPDATE sistema.users
    SET usuario='$usuario_upd', password='$clave_upd', nombres='$nombre_upd', apellidos='$apellido_upd',rol='$rol_upd'
    WHERE id=$us_id";
    
    if(mysqli_query($conexion,$sql_update)){
        header("location: index.php");
    
    }else{
        echo "Error:".$sql_update."<br>".mysqli_error($conexion);
    
    }mysqli_close($conexion);

?>
    
    
    


            