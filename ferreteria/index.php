<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

   <!--boostrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!--font awesome 5-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
     integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" 
     crossorigin="anonymous">
</head>
<body>
    <!--FORMULARIO PARA EL LOGIN DE ACCESO AL SISTEMA RECORDAR USAR LA SESIÓN EN EL HEADER-->
<div class="modal-dialog text-center">
<div class= "col-sw-8 main_section">
<div class="modal-content">
<div class="col-12 user-img"><img src="imagenes/logo.png" alt="" width="100" height="100">
</div>
 
<form class="col-12" action="validar.php" method="POST">
 
<div class="form-group">
<br>
<input type="text" name="user" placeholder="Usuario" id="usuario" >
</div>
<br>
<div class="form-group">
<input type="password" name="password" placeholder="Contraseña" id="contraseña">
</div>
<br>
<button type ="submit" class="btn btn-primary"> <i class="fas fa-sign-in-alt"></i>  Acceder</button><br>

</form>

</div>

</div>

</div>

<br>
    
</body>
</html>