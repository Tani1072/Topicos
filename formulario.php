<?php
require 'Conexion.php';
?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<style>
  form {

  padding: 20px;
}




.contendor {

width: 100%;


}
.btn  {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

main {
  
 
    width: 100%;
    height:100%;
    display: flex;
    align-items: flex-start;
}

section {
  align-items:center;
border
flex: 50%;
width: 500px;
height: 139px;
color: black;
flex-direction: column;

}
aside {
  flex: 50%;
width:100px;
height: 500px;
color: black;
flex-direction: column;
}
.container {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  width: 600px;
  border-radius: 5px;
  display: flex;
}
form {

 
  padding: 50px;
  border-radius: 10px;
}



</style>
<body>
  <header>
  <div class="mt-4 p-5 bg-dark text-black rounded">
  <h1>Molds on the web </h1>
</div>
  </header>
  <main>
  <div  class="col-2">
  </div>
  <div  class="col-8">


<form class="row g-3" action="validar.php" method="POST">
<h2 style="text-align:center;">Registro de Clientes</h2>
  <div class="col-md-6">
  <input type="hidden" class="form-control mb-3" name="id" placeholder="Id"> 
  <label for="nombre">*Nombre:</label>
  <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese su nombre(s)" ><br>
      </div>

      <div class="col-md-6">
      <label for="apellidos">*Apellidos:</label>
  <input type="text" id="apellidos" name="apellidos"  class="form-control" placeholder="Ingrese sus apellidos" ><br>
      </div>

      <div class="col-md-6">
      <label for="correo">Correo Electrónico:</label>
  <input type="email" id="correo" name="correo"  class="form-control" placeholder="Ingrese su correo electrónico" ><br>
</div>

      <div class="col-md-6">
  <label for="telefono">Teléfono:</label>
  <input type="tel" id="telefono" name="telefono"  class="form-control" placeholder="Ingrese su número de teléfono" ><br>
</div>

      <div class="col-md-6">
  <label for="direccion">Dirección:</label>
  <input type="text" id="direccion" name="direccion"  class="form-control" placeholder="Ingrese su dirección " ><br>
        </div>

        <div class="col-md-6">
  <label for="direccion">Usuario:</label>
  <input type="text" id="usuario" name="usuario"  class="form-control" placeholder="Ingrese un usuario " ><br>
        </div>

      <div class="col-md-6">
      <label for="psw">Contraseña:</label>
  <input type="text" id="psw" name="psw"  class="form-control" placeholder="Ingrese su contraseña "><br>
</div>
  
<div class="col-6">
  <button type="submit" class= "btn btn-primary" name="registrar">Registrar</button>
      </div>
</form>
</div>
  </main>
  <footer>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
 <a class="navbar-brand" href="#"></a>
</nav>
</footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>