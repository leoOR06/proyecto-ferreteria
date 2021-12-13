<?php include("conexion.php") ?>

<?php 

//código que obtiene los datos del carrito

    //se validan que las variables no esten vacias
    if(isset($_POST['nombrecliente']) && isset($_POST['nombreempleado'])){  


  $codigo = $_POST['nombrecliente']; 
  $codigoe = $_POST['nombreempleado'];

$resultado= mysqli_query($conn,"INSERT INTO venta (codigo_cliente,codigo_empleado) VALUES('$codigo','$codigoe')");

if (!$resultado){
  die("Falló la inserción");
}



if (isset($_POST['producto']) && isset($_POST['cantidad']) && isset($_POST['numero_venta']) && isset($_POST['precio'])){

$id =$_POST['numero_venta']; 
$codigo_prod = $_POST['producto']; 
$cantidad =$_POST['cantidad']; 
$precio=$_POST['precio'];

$query = mysqli_query($conn,"INSERT INTO detalle_venta (id_venta,codigo_producto,cantidad,precio) VALUES('$id','$codigo_prod','$cantidad','$precio')");


if (!$query){
  die("Falló la inserción número 2");
}
        
header ("location: carrito.php");
}
    }  
    
      
?>