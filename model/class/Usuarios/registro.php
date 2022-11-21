<?php?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../../assets/css/diseño.css">
    <link rel="stylesheet" href="../../../assets/css/style_boton.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    
</head>
<body>

<div class="login-box">
  <h2>Registro</h2>

  
  <form class="form" method="POST" action="controller/Registro/controller_registro.php">
  
    <div class="user-box" >
      <input id="inNombre" type="name" name="inNombre" required="">
      <label>Nombre</label>
    </div>
    <div class="user-box">
      <input id="inApellido" type="name" name="inApellido" required="" >
      <label>Apellido</label>
    </div>
    <div class="user-box">
      <input id="inUsuario" type="user" name="inUsuario" required="">
      <label>Usuario</label>
    </div>
    <div class="user-box">
      <input id="inPassword" type="password" name="inPassword" required="">
      <label>Password</label>
    </div>
    <div class="user-box">
    <select  class="select" name="inRol">
    <option value="">Seleccione su Rol</option>
    <option value="Administrador">Propietario</option>
    <option value="Administrador">Vendedor</option>
   </select>
    </div>
    <button disabled>
    <span>Crear</span>
    <div class="top"></div>
    <div class="left"></div>
    <div class="bottom"></div>
    <div class="right"></div>
</button>
<p class="message">Ya estás registrado? <a href="index.php">Iniciar sesión</a></p>
  </form>
</div>
</body>
</html>

<script src="assets/js/message.js"></script>