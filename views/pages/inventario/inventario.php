
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
                <h3 class="card-title"> Inventario </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="./backend/config/inventario/add_inventario.php" method="post">
                <div class="card-body">

                    <div class="form-group">
                    <label for="nombre_inventario"> Nombre Inventario</label>
                    <input type="text" class="form-control" name="nombre_inventario" id="nombre_inventario">
                    </div>

                    <div class="form-group">
                    <label for="cantidad"> Cantidad </label>
                    <input type="text" class="form-control" name="cantidad" id="cantidad">
                    </div>



                  <div class="form-check">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="inventario" value="Submit">
                </div>
              </form>
            </div>



<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

