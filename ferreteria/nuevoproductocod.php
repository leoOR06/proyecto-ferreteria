

<?php include("conexion.php")?>
<?php 
//codigo que recibe los valores del formulario para insertar los datos del nuevo producto
//inserción de un nuevo producto
//se validan que las variables no esten vacias

    if(isset($_POST['nombre']) && isset($_POST['existencia']) && isset($_POST['precio']) && isset($_POST['imagen'])){



  $nombre = $_POST['nombre']; 
  $existencia = $_POST['existencia'];
  $precio = $_POST['precio'];
  $imagen = $_POST['imagen'];


       $insertar="INSERT INTO almacen (existencia,nombre_producto,precio,imagen) 
       VALUES('$existencia','$nombre','$precio','$imagen')";
        $resultado = mysqli_query($conn,$insertar); 

        if (!$resultado){
          die("Falló la inserción");
      }
        header ("location: productos.php");
  
    }   
      
?>