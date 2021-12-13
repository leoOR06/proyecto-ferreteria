<?php include("includes/header.php") ?>

<div class="text-center">
<h1>Agregar nuevo producto</h1>
</div>
<div class="row d-flex justify-content-center">
<div class="col-md-4">
<div class="card card-body">

<!--Formulario para llenar los datos de un nuevo producto-->
            <form action="nuevoproductocod.php" method="POST">

              <div class="from-group">
                  <input type="text" name="nombre" class="form-control"
                  placeholder="Nombre del producto" autofocus>
              </div>
              <br>
              <div class="from-group">
                  <input type="text" name="existencia" class="form-control"
                  placeholder="Existencia" autofocus>
              </div>
              <br>
              <div class="from-group">
                  <input type="text" name="precio" class="form-control"
                  placeholder="Precio" autofocus>
              </div>
              <br>
              <div class="from-group">
                  <input type="text" name="imagen" class="form-control"
                  placeholder="Imagen" autofocus>
              </div>

               

                <br>
              <input type="submit" class="btn btn-success btn-block" 
              name="Guardar producto" value="Guardar producto">
            <br>

            
            </form>
            


          </div>
      </div>
      </div>
      </div>
      <br>
<?php include("includes/foother.php") ?>