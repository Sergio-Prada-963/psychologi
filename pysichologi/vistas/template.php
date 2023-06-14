<?php 
/* Capturando Rutas de la URL */
$routerArray = explode("/", $_SERVER['REQUEST_URI']);
$routerArray = array_filter($routerArray);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Fixed Sidebar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/assets/plugins/adminlte/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include"vistas/modules/navbar.php"; ?>

  <!-- Main Sidebar Container -->
  <?php include"vistas/modules/sidebar.php"; ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php 
    if(!empty($routerArray[4])){
      if($routerArray[5] == "users" ||
      $routerArray[5] == "Clinic%20Histori" ||
      $routerArray[5] == "Interviews" ||
      $routerArray[5] == "Psychologits" ||
      $routerArray[5] == "Treatment"){
        include "vistas/pages/".$routerArray[5]."/".$routerArray[5].".php";
      }
    }else {
      include "vistas/pages/home/home.php";
    }
    ?>
    
  </div>
  <!-- /.content-wrapper -->
  <?php require"modules/footer.php" ?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="vistas/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="vistas/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/assets/plugins/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vistas/assets/plugins/adminlte/js/demo.js"></script>
</body>
</html>
