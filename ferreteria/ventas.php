<?php include("includes/header.php") ?>
<?php include("conexion.php") ?>
<h1 class="text-center">Ventas Realizadas</h1>
<div class="col-md-11">
<!--tabla que muestra solo a adminsitradores las ventas generadas por los usuarios-->
<table class = "table table-striped table-bordered ">
  
                    <thead class = "thead-light">
                      <tr>
                      <th>
                        Cliente
                        </th>
                        <th>
                        Producto
                        </th>
                        <th>
                        Cantidad
                        </th>
                        <th>
                        Precio unitario
                        </th>
                        <th>
                        Total de venta
                        </th>
                        <th>
                        Fecha
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                    <?php

                    //código para mostrar los datos de la tabla ventas
                    $sql="SELECT nombre_cliente,nombre_producto, cantidad, almacen.precio, venta.fecha FROM cliente JOIN venta USING (codigo_cliente) JOIN detalle_venta ON venta.numero_venta=detalle_venta.id_venta JOIN almacen USING (codigo_producto) ORDER BY id_venta ASC";
                    $result=mysqli_query($conn,$sql);

                    while($fila=mysqli_fetch_array($result)){
                    ?>
                                <tr>
                                <td> <?php echo $fila ['nombre_cliente'] ?> </td>
                                <td> <?php echo $fila ['nombre_producto'] ?> </td>
                                <td> <?php echo $fila ['cantidad'] ?> </td>
                                <td> $ <?php echo $fila ['precio'] ?> </td>
                                <td> $ <?php echo ( $fila ['precio']*$fila['cantidad']) ?> </td>
                                <td> <?php echo $fila ['fecha'] ?> </td>
                                
                                
                                
                                </tr>
                              
                                <?php 
                    }
                  ?>
                    </tbody>
                </table>

                </div>
<?php include("includes/foother.php") ?>