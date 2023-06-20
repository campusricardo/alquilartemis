<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();


$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);
var_dump($routesArray);


?>

<?php 

  if (!empty($routesArray[2])){
    if ($routesArray[2] == "login"){
        if($_SESSION['logIn'] === 1){
          include "./views/pages/main/admin.php";
          if (!empty($routesArray[2])){
            if ($routesArray[2] == "alquilar" ||
                $routesArray[2] == "devolver" 
               ){
                include "./views/pages/".$routesArray[2]."/".$routesArray[2].".php";
               }
          } else {
            include "./";
          }
        } else {
        include "pages/loginRegister/{$routesArray[2]}.php";
        }


       }
    }
   else {
    include "views/pages/loginRegister/register.php";
    
  }

?>

<?php if ($_SESSION['logIn']) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Fixed Sidebar</title>

  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">

  <!-- overlayScrollbars -->

  <link rel="stylesheet" href="views/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="views/assets/plugins/adminlte/css/adminlte.min.css">

  <!-- DataTables -->

  <link rel="stylesheet" href="views/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="views/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" href="views/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  <!-- jQuery -->

<script src="views/assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->

<script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->

<script src="views/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- AdminLTE App -->

<script src="views/assets/plugins/adminlte/js/adminlte.min.js"></script>


<!-- DataTables  & Plugins -->

<script src="views/assets/plugins/datatables/jquery.dataTables.min.js"></script>

<script src="views/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="views/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script src="views/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="views/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>

<script src="views/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="views/assets/plugins/jszip/jszip.min.js"></script>

<script src="views/assets/plugins/pdfmake/pdfmake.min.js"></script>

<script src="views/assets/plugins/pdfmake/vfs_fonts.js"></script>

<script src="views/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>

<script src="views/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>

<script src="views/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
<?php include "views/modules/navbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "views/modules/sidebar.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


  <?php 
if ($routesArray[2] == 'login'){
  include "./views/modules/api.php";
}
  // echo "<pre>";
  // print_r($routesArray);
  // echo "</pre>";

  if (!empty($routesArray[2])){
    if ($routesArray[2] == "alquilar" || $routesArray[2] == "devolver" || $routesArray[2] == "obras" || $routesArray[2] == "constructoras" || $routesArray[2] == "inventario"){

        include "pages/".$routesArray[2]."/".$routesArray[2].".php";
       }
  } else {
    include "./";
  }



  ?>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "views/modules/footer.php"; ?>


  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>
</html>
<?php } else { /* XD */} 
?>