<?php 
  include "../config/koneksi.php"
?>

<!DOCTYPE html>
<html>
  <?php 
    include "library-css.php";
  ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php 
    include "library-header.php";
    include "library-sidebar.php";
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <?php  
              $pendaftar_baru = mysqli_query($db, "SELECT * FROM recruitment WHERE status_pelamar = ''");
              $jum_pendaftar = mysqli_num_rows($pendaftar_baru);
          ?>
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jum_pendaftar; ?></h3>

              <p>Jumlah Pendaftar Baru</p>
            </div>
            <div class="icon">
              <i class="ion ion-email-unread"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <?php  
            $pendaftar_masuk = mysqli_query($db, "SELECT * FROM recruitment WHERE status_pelamar = 'lolos-seleksi'");
            $jum_masuk = mysqli_num_rows($pendaftar_masuk);
          ?>
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $jum_masuk ?></h3>

              <p>Jumlah Pelamar Lolos</p>
            </div>
            <div class="icon">
              <i class="ion ion-checkmark-circled"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <?php  
            $pendaftar_interview = mysqli_query($db, "SELECT * FROM recruitment WHERE status_pelamar = 'interview'");
            $jum_interview = mysqli_num_rows($pendaftar_interview);
          ?>
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $jum_interview ?></h3>

              <p>Jumlah Interview</p>
            </div>
            <div class="icon">
              <i class="ion ion-information-circled"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <?php  
            $pendaftar_ditolak = mysqli_query($db, "SELECT * FROM recruitment WHERE status_pelamar = 'gagal-seleksi'");
            $jum_ditolak = mysqli_num_rows($pendaftar_ditolak);
          ?>
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $jum_ditolak ?></h3>

              <p>Jumlah Pelamar Ditolak</p>
            </div>
            <div class="icon">
              <i class="ion ion-alert-circled"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
    
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.1.0
    </div>
    <strong>Copyright &copy; 2018 <a href="">PT Harda Esa Raksa</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<?php
  include "library-js.php";
?>
</body>
</html>
