
 <?php
 session_start();
    $user=$_POST['user'];
    $password=$_POST['password'];

//VALIDACION DE LOS DATOS DE USUARIO 
	include("conexion.php");
        

    
    $validar1 = mysqli_query($conn, "SELECT * FROM cliente WHERE cliente.contraseña='$password' 
    and cliente.usuario='$user' ");

    $validar2 = mysqli_query($conn, "SELECT * FROM empleado WHERE empleado.contraseña='$password' 
    and empleado.usuario='$user'");

        if($fila = mysqli_fetch_array($validar1)){
           // session_start();
        $_SESSION ['perfil'] = $fila["perfil"];
		header("Location:bienvenida.php");
		
        }else{
        if($fila = mysqli_fetch_array($validar2)){
            //session_start();
        $_SESSION ['perfil'] = $fila["perfil"];
		header("Location:bienvenida.php");
		
        }else


            header("Location:index.php?msg=USUARIO NO VALIDO"); 
    }
            
?>
