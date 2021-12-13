<?php 
include("conexion.php");
//código para eliminar un cliente de la tabka dependiendo de su codigo de cliente
if(isset($_GET['codigo_cliente'])){

    //se asigna a una variable el codigo del cliente y otra a la consulta para eliminar a un cliente de acuerdo a su cógido
    $codigo = $_GET['codigo_cliente'];
    $eliminar = "DELETE FROM cliente WHERE codigo_cliente = $codigo";


    $resultado = mysqli_query($conn,$eliminar);
    if(!$resultado){
        die("Falló la eliminación del cliente");
    }
    
    header('Location: clientes.php');
}
?>