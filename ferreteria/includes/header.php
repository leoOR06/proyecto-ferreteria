

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferreteria </title>
    <!--boostrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--font awesome 5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
     integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" 
     crossorigin="anonymous">
     <!-- Alertity -->
    <link rel="stylesheet" href="libs/js/alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="libs/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="libs/js/alertify/lib/alertify.min.js"></script>
</head>
<body>


<!--barra de navegación navar-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand logo" href="bienvenida.php" > <img  src="imagenes/logo.png" width="60" height="60" class="well"> <bold>Ferreteria</bold> <kbd>Espino </kbd></a>
   
  <?php session_start(); ?>
  <div class="collapse navbar-collapse" >
  
    <ul class="navbar-nav mr-auto">
      
      <!--Permisos asignados a los tipos de usuario administrador y cliente-->

      <!--Perfil administrador-->
      <?php if($_SESSION['perfil']=="administrador"){ ?>
      
        <li class="nav-item">
          <a class="nav-link" href="clientes.php">Clientes </a>
        </li>

      <li class="nav-item">
        <a class="nav-link" href="Ventas.php">Venta</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="productos.php">Productos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="buscar.php">B&uacutesqueda</a>
      </li>

<?php }

      //perfil cliente
      if(($_SESSION['perfil']=="cliente")) { ?>

      <li class="nav-item">
        <a class="nav-link" href="productos2clientes.php">productos</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="buscar.php">B&uacutesqueda</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Carrito.php">Carrito</a>
      </li>
      
<?php } ?>


      <li class="nav-item">
        <a class="nav-link" href="Salir.php"> <B><U>Salir</U></B></a>
      </li>
      
      
    </ul>
   
  </div>
</nav>