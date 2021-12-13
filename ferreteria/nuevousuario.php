<?php include("includes/header.php") ?>
<!--Formulario para el boton nuevo cliente-->
<div class="text-center">
<h1>Nuevo Cliente</h1>
</div>
<div class="row d-flex justify-content-center">
<div class="col-md-4">
<div class="card card-body">
            <form action="nuevo.php" method="POST">

              <div class="from-group">
                  <input type="text" name="nombre" class="form-control"
                  placeholder="Nombre del cliente" autofocus>
              </div>

                <br>

                <div class="from-group">
                  <input type="text" name="usuario" class="form-control"
                  placeholder="Nombre de usuario" autofocus >
              </div>

                <br>

                <div class="from-group">
                  <input type="password" name="contraseña" class="form-control"
                  placeholder="Contraseña" autofocus >
              </div>
                <br>

                <div class="from-group">
                  <input type="text" name="perfil" class="form-control"
                  placeholder="Perfil" autofocus >
              </div>
                <br>
              <input type="submit" class="btn btn-success btn-block" 
              name="Guardar usuario" value="guardar usuario">
            <br>

            
            </form>
            


          </div>
      </div>
      </div>
      </div>
      <br>
<?php include("includes/foother.php") ?>