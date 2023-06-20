
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
                <h3 class="card-title"> Constructora </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="./backend/config/constructora/add_constructora.php" method="post">
                <div class="card-body">

                    <div class="form-group">
                    <label for="nombre_constructora"> Nombre constructora</label>
                    <input type="text" class="form-control" name="nombre_constructora" id="nombre_constructora">
                    </div>

                    <div class="form-group">
                    <label for="telefono_constructora"> Telefono constructora</label>
                    <input type="text" class="form-control" name="telefono_constructora" id="telefono_constructora">
                    </div>



                  <div class="form-check">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="constructora" value="Submit">
                </div>
              </form>
            </div>



<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

