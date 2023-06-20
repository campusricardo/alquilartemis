
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
                <h3 class="card-title"> O </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="./backend/config/obra/add_obra.php" method="post">
                <div class="card-body">

                    <div class="form-group">
                    <label for="nombre_obra"> Nombre Obra</label>
                    <input type="text" class="form-control" name="nombre_obra" id="nombre_obra">
                    </div>

                    <div class="form-group">
                    <label for="lugar_obra"> Lugar Obra</label>
                    <input type="text" class="form-control" name="lugar_obra" id="lugar_obra">
                    </div>



                  <div class="form-check">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="obra" value="Submit">
                </div>
              </form>
            </div>



<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

