
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
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Data User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-xs-12">
          <div class="box pad10">
            <div class="box-header">
              <h3 class="box-title">Tabel Pelamar</h3>
              <div class="box-tools">
                
              </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body table-responsive no-padding">
              <a class="btn-export-excel" href="export-excel.php" target="_BLANK">
                <button class="btn btn-warning btn-submit">Export Excel<i class="far fa-file-excel"></i></button>
              </a>
              <table class="table table-bordered table-hover" id="table-user">
              <thead>
                <tr>
                  <td>No</td>
                  <th>Posisi</th>
                  <th>Refrensi</th>
                  <th>Nama Lengkap</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Jenis Kelamin</th>
                  <!-- <th>No Handphone</th> -->
                  <th>Pendidikan Terakhir</th>
                  <th>Pengalaman Kerja</th>
                  <!-- <th>Lama Pengalaman</th> -->
                  <th>Status Pelamar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $no = 1;
                    $pelamar = mysqli_query($db, "SELECT * FROM recruitment");
                    // $hitungDulu = mysqli_num_rows($pelamar);
                    while ($row = mysqli_fetch_assoc($pelamar)) {

                    $status_pelamar = $row['status_pelamar'];
                    $jadwal_interview = $row['jadwal_interview'];

                    $startdate = date($jadwal_interview);
                    $expire = strtotime($startdate. '+1 days');                              
                ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $row['posisi']; ?></td>
                  <td><?php echo $row['refrensi']; ?></td>
                  <td><?php echo $row['nama_lengkap'];?></td>
                  <td><?php echo $row['tanggal_lahir']; ?></td>
                  <th><?php echo $row['agama']; ?></th>
                  <th><?php echo $row['jenis_kelamin']; ?></th>
                  <!-- <th><?php echo $row['no_handphone']; ?></th> -->
                  <th><?php echo $row['pendidikan_terakhir']; ?></th>
                  <th><?php echo $row['pengalaman_kerja']; ?></th>
                  <!-- <th><?php echo $row['lama_pengalaman']; ?></th> -->
                  <td>
                      <?php 
                        if ($status_pelamar == "DISARANKAN") {
                            echo '<span class="label label-success">Disarankan</span>';
                        } elseif ($status_pelamar == "REJECTED"){
                            echo '<span class="label label-danger">Rejected</span>';
                        } else {
                            echo '<span class="label label-info">Belum Interview</span>';
                        }
                      ?>
                  </td>
                  <td>
                    <?php echo "<a href='edit-user.php?id=$row[id]'><span class='action-icon'><i class='fa fa-cogs'></i></span></a>" ?>
                    <a href='server.php?id=<?php echo $row['id']; ?>' onclick="return confirm('Apakah yakin data ini akan dihapus?')"><span class='action-icon'><i class='fa fa-trash'></i></span></a>
                    <!-- <a href=""><span class="action-icon"><i class="fa fa-eye"></i></span></a> -->
                  </td>
                </tr>

                <?php $no++; } ?>
              </tbody>
              </table>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
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
   $(function () {
   $('#table-user').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    // $('#example1').DataTable()
   
  })
</script>
<?php
  include "library-js.php";
?>
</body>
</html>
