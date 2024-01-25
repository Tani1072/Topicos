<?php
require 'Conexion.php';
?>



<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <link rel="stylesheet" href="css/estilo.css" type="text/css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <div class="mt-4 p-5 bg-dark text-white rounded">
  <h1>Molds on the web </h1>
</div>
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
    <!-- place navbar here -->
  </header>
  <main>
  
  <!-- FORMULARIO -->
  <section>
  
</section>


  <aside>
 
  <div class="col-13">
  <div class="contenedor-imagen" >
 
  
</div>



 
  <form class="row g-3" action="login.php" method="POST">

  <div class="col-md-6">
  


  <div class="col-12">

      <div class="col-md-6" style="display: block; margin: 0 auto;">
    
      <h2 style="text-align:center;" >Inicio de sesión</h2>
      <label for="correo">Correo</label>
  <input type="text" id="correo" name="correo"  class="form-control" placeholder="Usuario"  ><br>
     </div>

     
      <div class="col-md-6" style="display: block; margin: 0 auto;">
      <label for="psw">Contraseña:</label>
  <input type="text" id="psw" name="psw"  class="form-control" placeholder="Ingrese su contraseña "><br>
</div>

<div class="col-12" >
  <button type="submit" class= "btn btn-primary" name="registrar" style="display: block; margin: 0 auto;">Iniciar sesion</button>
      </div>
    
</form>

</aside>

 
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>


</main>
<footer>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
 <a class="navbar-brand" href="#"></a>
</nav>
</footer>
</body>

</html>