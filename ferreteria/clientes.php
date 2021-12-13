<?php include("includes/header.php") ?>
<?php include("conexion.php") ?>


<h1 class="text-center">Clientes</h1>

<!--boton para agregar nuevo usuario-->
<div class="col-md-11">
                <a class="btn btn-primary" href="nuevousuario.php" role="button">Nuevo Cliente </a>
</div>

<br>
<div class="col-md-11">
<!--Tabla para mostrar la información de los usuarios-->
<table class = "table table-striped table-bordered ">

                    <thead class = "thead-light">
                      <tr>
                        <th>
                          Nombre
                        </th>
                        <th>
                        Usuario
                        </th>
                        <th>
                        Contraseña
                        </th>
                        <th>
                        Acciones
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                    //código para mostrar los datos de la tabla clientes
                    $sql="SELECT * FROM cliente";
                    $result=mysqli_query($conn,$sql);

                    while($fila=mysqli_fetch_array($result)){
                    ?>
                                <tr>
                                <td> <?php echo $fila ['nombre_cliente'] ?></td>
                                <td> <?php echo $fila ['usuario'] ?> </td>
                                <td> <?php echo $fila ['contraseña'] ?>  </td>
                                <td>

                                    <a href="editarcliente.php?codigo_cliente=<?php echo $fila ['codigo_cliente']?>" class ="btn btn-secondary" class=btn-md href="editarcliente.php">
                                    <i class="fas fa-user-edit"></i>
                                      
                                    </a>
                                    <a  href="eliminarcliente.php?codigo_cliente=<?php echo $fila ['codigo_cliente']?>" class="btn btn-danger">
                                    <i class="fas fa-user-times"></i>
                                    </a>
                                </td>
                                </tr>
                                <?php 
                    }
                    ?>
                              
                           
                    </tbody>
                </table>
                </div>
                <br>
                
<br>
<?php include("includes/foother.php") ?>