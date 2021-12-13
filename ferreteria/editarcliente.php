<?php include("conexion.php") ?>
<?php

//codigo para mostrar los datos almacenados del cliente a actualizar
if(isset($_GET['codigo_cliente'])){
$codigo = $_GET['codigo_cliente'];
    $consulta = "SELECT * FROM cliente WHERE codigo_cliente =$codigo";
        $result = mysqli_query($conn, $consulta);
    if(mysqli_num_rows($result)){
        $fila = mysqli_fetch_array($result);
        $nombre=$fila['nombre_cliente'];
        $usuario =$fila ['usuario'];
        $contraseña=$fila ['contraseña'];
    }

}
 
//codigo para actualizar los datos del cliente
if (isset($_POST['guardar'])) {
  $codigo = $_GET['codigo_cliente'];
  $nombrenuevo= $_POST['nombre'];
  $usuarionuevo = $_POST['usuario'];
  $contraseñanueva = $_POST['contraseña'];

  $query="UPDATE cliente set nombre_cliente = '$nombrenuevo',usuario ='$usuarionuevo',  contraseña = '$contraseñanueva' WHERE codigo_cliente='$codigo'";
  mysqli_query($conn, $query);
 
  header('Location: clientes.php');
}

  ?>


<?php include("includes/header.php") ?>

<div class="text-center">
<h1>Editar Cliente</h1>
</div>
<div class="row d-flex justify-content-center">
<div class="col-md-4">
<div class="card card-body">

            <!--formulario que recibe los datos de un cliente para editarlos-->
            <form action="editarcliente.php?codigo_cliente=<?php echo $_GET['codigo_cliente']; ?>"  method="POST">

              <div class="from-group">
                  <input type="text" name="nombre" class="form-control"
                  placeholder="Nombre del cliente" value="<?php echo $nombre; ?>">
              </div>

                <br>

                <div class="from-group">
                  <input type="text" name="usuario" class="form-control"
                  placeholder="Nombre de usuario" value="<?php echo $usuario; ?>">
              </div>

                <br>

                <div class="from-group">
                  <input type="password" name="contraseña" class="form-control"
                  placeholder="Contraseña" value="<?php echo $contraseña; ?>" >
              </div>
                <br>

           
              <button class="btn btn-success" name="guardar">
                Guardar cambios
                </button>

               


            <br>
            </form>
          </div>
      </div>
      </div>
     
      <br>
<?php include("includes/foother.php") ?>