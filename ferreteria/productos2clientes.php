<?php include("includes/header.php") ?>
<?php include("conexion.php") ?>

<!--Tabla que muestra los productos a los usuarios PERO sin poder hacer las acciones del administrador-->

<h1 class="text-center">Productos</h1>


<br>
<div class="col-md-11">
<table class = "table table-striped table-bordered">

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

                               
 
                                </tr>

                  <?php 
                    }
                  ?>
                           
                    </tbody>
                </table>

                </div>
<?php include("includes/foother.php") ?>