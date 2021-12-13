<?php include("conexion.php"); ?>

<?php

//codigo para mostrar los datos almacenados del producto a actualizar
if(isset($_GET['codigo_producto'])){
$codigo = $_GET['codigo_producto'];
    $consulta = "SELECT * FROM almacen WHERE codigo_producto =$codigo";
        $result = mysqli_query($conn, $consulta);
    if(mysqli_num_rows($result)){
        $fila = mysqli_fetch_array($result);
        $nombre=$fila['nombre_producto'];
        $cantidad =$fila ['existencia'];
        $precio=$fila ['precio'];
        $imagen=$fila ['imagen'];
    }

} 
if (isset($_POST['guardar'])) {
  $codigo = $_GET['codigo_producto'];
  $nombrenuevo= $_POST['nombre_prod'];
  $cantidadnueva = $_POST['cantidad'];
  $precionuevo=$_POST ['precioprod'];
  $imagennueva=$_POST ['imagen'];
  

  $query="UPDATE almacen set nombre_producto = '$nombrenuevo', existencia ='$cantidadnueva',  precio = '$precionuevo', imagen = '$imagennueva' WHERE codigo_producto='$codigo'";
  mysqli_query($conn, $query);
 
  header('Location:productos.php');
}
?>

<?php include("includes/header.php") ?>
<div class="text-center">
<h1>Editar producto</h1>
</div>
<div class="row d-flex justify-content-center">
<div class="col-md-4">
<div class="card card-body">
            <form action="editarproducto.php?codigo_producto=<?php echo $_GET['codigo_producto']; ?>" method="POST">

              <div class="from-group">
                  <input type="text" name="nombre_prod" class="form-control"
                  placeholder="Nombre del producto" value="<?php echo $nombre; ?>">
              </div>

                <br>

                <div class="from-group">
                  <input type="text" name="cantidad" class="form-control"
                  placeholder="Cantidad" value="<?php echo $cantidad; ?>">
              </div>

                <br>

                <div class="from-group">
                  <input type="text" name="precioprod" class="form-control"
                  placeholder="Precio" value="<?php echo $precio; ?>">
              </div>
<br>
              <div class="from-group">
                  <input type="text" name="imagen" class="form-control"
                  placeholder="Presentación" value="<?php echo $imagen; ?>">
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
      </div>
      <br>
<?php include("includes/foother.php") ?>