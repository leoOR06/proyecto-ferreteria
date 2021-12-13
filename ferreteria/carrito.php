<?php include("conexion.php") ?>
<?php include("includes/header.php") ?>


  <div class="text-center">
  <h1>Carrito de compras</h1>
  </div>
<div class="row d-flex justify-content-center">
<div class="col-md-4">
<div class="card card-body">

<!--Formulario que contendra la información para insertar-->

            <form action="compra.php" method="POST">



<!--select para seleccionar el nombre del cliente que hace la venta-->
            <label for="mombrecliente">Eliga su nombre: </label>
<select name='nombrecliente' id='codigo_cliente'>
<?php
//include("conexion.php");
$tabla2 = mysqli_query($conn,"SELECT * FROM cliente");
while($fila2 =  mysqli_fetch_array($tabla2)){    
if($fila["codigo_cliente"]==$fila2["codigo_cliente"])
			$texto=" selected "; 
else 
	$texto="";	    
	echo "<OPTION value=".$fila2["codigo_cliente"]." $texto>".$fila2["nombre_cliente"]."</OPTION>"; }
?></select>


<!--select para seleccionar el nombre del empleado que realiza la venta-->
<label for="nombreempleado">Empleado: </label>
<select name='nombreempleado' id='codigo_empleado'>
<?php
//include("conexion.php");
$tabla2 = mysqli_query($conn,"SELECT * FROM empleado");
while($fila2 =  mysqli_fetch_array($tabla2)){    
if($fila["codigo_empleado"]==$fila2["codigo_empleado"])
			$texto=" selected "; 
else 
	$texto="";	    
	echo "<OPTION value=".$fila2["codigo_empleado"]." $texto>".$fila2["nombre_empleado"]."</OPTION>";
}
?></select>
<br>


<!--Input que tiene el último ID generado en el número de venta QUE SE USARA EN EL ID DE LOS DETALLES DE LA VENTA-->
<div class="from-group" >
<?php
//include("conexion.php");
$tabla = mysqli_query($conn,"SELECT max(numero_venta)+1 as siguiente FROM venta");
if($fila=mysqli_fetch_array($tabla)){
?>
<label for="numero_venta">Número de venta (no modificar): </label>
<input name="numero_venta" type="text" id="numero_venta" value="<?php echo $fila['siguiente']  ?>" />
<?php
}
?>
</div>
<br>


<!--select para seleccionar el producto que se compra-->
<label for="codigo_producto">Producto: </label>
<select name='producto' id='codigo_producto'>
<?php
//include("conexion.php");
$tabla3 = mysqli_query($conn,"SELECT * FROM almacen");
while($fila3 =  mysqli_fetch_array($tabla3)){    
if($fila1["codigo_producto"]==$fila3["codigo_producto"])
			$texto=" selected "; 
else 
	$texto="";	    
	echo "<OPTION value=".$fila3["codigo_producto"]." $texto>".$fila3["nombre_producto"]."</OPTION>";
}
?></select>
<br>      


<!--Input para introducir la cantidad a comprar-->
              <br>
			  <div class="from-group">
                  <input type="text" name="cantidad" class="form-control"
                  placeholder="Cantidad" autofocus>
        </div>
        <br>

             
<!--Input para introducir el precio-->
			  <div class="from-group">
                  <input type="text" name="precio" class="form-control"
                  placeholder="precio" autofocus>
        </div>
        <br>

              <input type="submit" class="btn btn-success btn-block" 
              name="Guardar compra" value="guardar compra">
              
            </form>
          </div>
      </div>
      </div>
      

     
 
      
      <?php include("includes/foother.php") ?>
