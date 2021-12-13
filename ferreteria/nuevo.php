

<?php include("conexion.php")?>
<?php 
//código para la inserción del cliente nuevo
//se validan que las variables no esten vacias

    if(isset($_POST['nombre']) && isset($_POST['contraseña']) && isset($_POST['usuario']) && isset($_POST['perfil'])){



  $nombre = $_POST['nombre']; 
  $contraseña = $_POST['contraseña'];
  $usuario = $_POST['usuario'];
  $perfil = $_POST['perfil'];


       $insertar="INSERT INTO cliente (nombre_cliente,contraseña,usuario,perfil) 
       VALUES('$nombre','$contraseña','$usuario','$perfil')";

        $resultado = mysqli_query($conn,$insertar); 

        if (!$resultado){
          die("Falló la inserción");
      }
        header ("location: clientes.php");
  
    }   
      
?>