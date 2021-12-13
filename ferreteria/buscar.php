

<?php include("includes/header.php") ?>

<br>
<div class="row d-flex justify-content-center">
   
  <div class="col-md-3">
<div class="card card-body">

<!--formulario donde se escribe el producto a buscar-->

<form action="codbuscar.php"  method ="POST">

                <div class="from-group">
                  <input type="text" name="busqueda" class="form-control"
                  placeholder="Nombre del producto" >
              </div>


                <br>

                <button class="btn btn-success" name="guardar" >
                <i class="fas fa-search"></i>
                 Realizar b&uacutesqueda
                </button>
                </form>
  </div>
  </div>
  </div>
  <br>
  <?php include("includes/foother.php") ?>