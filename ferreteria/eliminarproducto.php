<?php 
include("conexion.php");

if(isset($_GET['codigo_producto'])){

    //se asigna a una variable el codigo del producto y otra a la consulta para eliminar a un producto de acuerdo a su cógido
    $cod_prod = $_GET['codigo_producto'];
    $eliminar_prod ="DELETE FROM almacen WHERE codigo_producto = $cod_prod";

    $resultado_prod = mysqli_query($conn,$eliminar_prod);
    if(!$resultado_prod){
        die("Falló la eliminación del producto");
    }
    
    header('Location:productos.php');
}
?>