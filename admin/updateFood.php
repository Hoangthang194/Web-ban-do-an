<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Trang Quản Trị</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" style="color: #fff;">
          <i class="fa-solid fa-user fa-beat img-circle elevation-2"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý món ăn
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách món ăn</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./addProduct.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm món ăn</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý khuyến mãi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./promotion.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách khuyến mãi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./addPromotion.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm khuyến mãi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="./Order.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quản lý đơn hàng
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cập nhật món ăn</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php
        echo '
      <form action="../app/Controller/food.php?" method="get">
        '
         ?>
         <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="update" value="true">
    <div class="mb-3">
      <label for="tenMonAn" class="form-label">Tên món ăn</label>
      <input type="text" class="form-control" id="tenMonAn"  required name="food_name">
    </div>
    <div class="mb-3">
    <div class="row">
    <div class="col-md-6 mb-3">
      <label for="foodType" class="form-label">Chọn loại món ăn:</label>
      <select class="form-select" id="foodType" name="menu_id">
        <?php
        require_once "../db.conn.php";
        require_once "../app/Interface/IMenu.php";
        require_once "../app/Classes/Menu.php";

        $menu = new Menu();
        $result = $menu->GetAll();
        foreach($result as $item){
          echo '
          <option value="'.$item["menu_id"].'">'.$item["menu_name"].'</option>
          ';
        }
         ?>
      </select>
    </div>

    <div class="col-md-6 mb-3">
      <label for="drinkType" class="form-label">Chọn loại khuyến mãi:</label>
      <select class="form-select" id="promotiontype" name="promotion_id">
      <?php
      require_once "../app/Interface/IPromotion.php";
      require_once "../app/Classes/Promotion.php";
      $promotion = new Promotion();
      $result = $promotion->getPromotion();
      if(count($result) == 0){
        echo '
        <option value="0">Không áp khuyến mãi</option>
        ';
      }
      else{
        echo '
        <option value="0" selected>Không áp khuyến mãi</option>
        ';
        foreach($result as $item){
          echo '
          <option value="'.$item["promotion_id"].'">'.$item["promotion_name"].'</option>
        ';
        }
      }
      
       ?>
       </select>
    </div>
  </div>
    </div>
    <div class="mb-3">
      <label for="gia" class="form-label">Giá</label>
      <input type="text" class="form-control" id="gia" required name="price">
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật món ăn</button>
    <button  class="btn btn-secondary">Hủy</button>
  </form>
  <?php
  if(isset($_GET["update"])){
    require_once "../db.conn.php";
    require_once "../app/Interface/IFood.php";
    require_once "../app/Classes/Food.php";
    $food_id = $_GET["id"];
    $food = new Food();
    $item = $food->getById($food_id);
    if($item){
        echo '
    <script>
    document.getElementById("tenMonAn").value = "'.$item[0]["food_name"].'";
    document.getElementById("foodType").value = "'.$item[0]["menu_id"].'";
    document.getElementById("promotiontype").value = "'.$item[0]["promotion_id"].'";
    document.getElementById("gia").value = "'.$item[0]["price"].'";
    </script>
    ';
    }
  }
   ?>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
