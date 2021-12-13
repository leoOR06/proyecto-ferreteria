<?php include("includes/header.php") ?>
<?php include("conexion.php") ?>

<!--código que llena la tabla resultado de la busqueda de un producto-->
<h1 class="text-center">Búsqueda</h1>

<br>
<div class="col-md-8">
<table class = "table table-striped table-bordered">

                    <thead>
                      <tr>
                        <th>
                          Nombre
                        </th>
                        <th>
                        Existencia
                        </th>
                        <th>
                        Precio
                        </th>
                        <th>
                        Presentación
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                     
                    <?php
  $busqueda=$_POST['busqueda'];
 
  $tabla = mysqli_query($conn,"SELECT nombre_producto,existencia, precio,imagen FROM almacen WHERE nombre_producto LIKE '%$busqueda%'");
  while($fila=mysqli_fetch_array($tabla))
                  {?>
                                <tr>
                                <td><?php echo $fila ['nombre_producto'] ?> </td>
                                <td> <?php echo $fila ['existencia'] ?> </td>
                                <td>$ <?php echo $fila ['precio'] ?> </td>
                                <td> <img src=imagenes/<?php echo $fila ['imagen'] ?> width=100> </td>
                                </tr>
                  <?php 
                    }
                  ?>
                           
                    </tbody>
                </table>

                </div>
<?php include("includes/foother.php") ?>