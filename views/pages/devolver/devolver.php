<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "./backend/models/constructoras.php";
require_once "./backend/models/empleado.php";
require_once "./backend/models/obras.php";
require_once "./backend/models/inventario.php";


$constructoras = new Constructora();
$empleados = new Empleado();
$obra = new Obra();
$inventario = new Inventario();

$constructoras_data = $constructoras->obtainData();
$empleados_data = $empleados->obtainData();
$obra_data = $obra->obtainData();
$inventario_data = $inventario->obtainData();


?>
<div class="wrapper">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Alquilar </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="./backend/config/entrada/addEntrada.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="empleado">Empleados</label>
                    <select class="form-control" name="empleado" id="empleado">
                      <?php foreach ($empleados_data as $key => $val){?>

                        <option value="<?= $val['id_empleado'] ?>"> <?= $val['nombre_empleado'] ?> </option>
                        <?php }?>
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="constructora">Constructoras </label>
                    <select class="form-control" name="constructora" id="constructora">
                    <?php foreach ($constructoras_data as $key => $val){?>

                    <option value="<?= $val['id_constructora'] ?>"> <?= $val['nombre_constructora'] ?> </option>
                    <?php }?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="obra">Obra</label>
                    <select class="form-control" name="obra" id="obra">
                    <?php foreach ($obra_data as $key => $val){?>

                    <option value="<?= $val['id_obra'] ?>"> <?= $val['nombre_obra'] ?> </option>
                    <?php }?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="inventario">Inventario</label>
                    <select class="form-control" name="inventario" id="inventario">
                    <?php foreach ($inventario_data as $key => $val){?>

                    <option value="<?= $val['id_inventario'] ?>"> <?= $val['nombre_inventario'] ?> </option>
                    <?php }?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="entrada_cantidad"> Entrada Cantidad  </label>
                    <input type="number" class="form-control" name="entrada_cantidad" id="entrada_cantidad" placeholder="Entrada Cantidad ">
                  </div>
                  <div class="form-group">
                    <label for="fecha_entreda">Fecha Entrada</label>
                    <input type="text" class="form-control" name="fecha_entreda" id="fecha_entreda">
                    </div>
                    <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                    <input type="text" class="form-control" name="observaciones" id="observaciones">
                    </div>

                  <div class="form-check">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="devolver" value="Submit">
                </div>
              </form>
            </div>



<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

