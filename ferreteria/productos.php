<?php include("includes/header.php") ?>
<?php include("conexion.php") ?>

<!--Tabla que muestra los productos existentes y las acciones que se pueden hacer con ellos-->
<h1 class="text-center">Productos</h1>

<div class="col-md-11">
                <a href="nuevoproducto.php" class="btn btn-primary"  role="button">Nuevo producto </a>
</div>
<br>
<div class="col-md-11">
<table class = "table table-striped table-bordered ">

                    <thead class = "thead-light">
                      <tr>
                        <th>
                          Nombre
                        </th>
                        <th>
                        Cantidad
                        </th>
                        <th>
                        Precio
                        </th>
                        <th>
                        Presentación
                        </th>
                         
                         <th>
                        Acciones
                        </th>
                      </tr>
                    </thead>
                    <tbody>


                    <?php
                    $sql="SELECT * FROM almacen";
                    $result=mysqli_query($conn,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                                <tr>
                                <td><?php echo $mostrar ['nombre_producto'] ?>  </td>
                                <td> <?php echo $mostrar ['existencia'] ?> </td>
                                <td>$ <?php echo $mostrar ['precio'] ?> </td>
                                <td> <img src=imagenes/<?php echo $mostrar ['imagen'] ?> width=100> </td>

                                <td>
                                    <a href="editarproducto.php?codigo_producto=<?php echo $mostrar ['codigo_producto']?>" class ="btn btn-secondary" class=btn-md href="editarproducto.php">
                                    <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <a href="eliminarproducto.php?codigo_producto=<?php echo $mostrar ['codigo_producto']?>" class="btn btn-danger">
                                    <i class="fas fa-eraser"></i>
                                    </a>

                                </td>
 
                                </tr>

                  <?php 
                    }
                  ?>
                           
                    </tbody>
                </table>

                </div>
<?php include("includes/foother.php") ?>