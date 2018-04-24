
<!DOCTYPE html>
<html>
  <?php 
    ob_start();
    include "library-css.php";
  ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php 
    include "library-header.php";
    include "library-sidebar.php";
  ?>

   <?php
      if (isset($_GET['id'])) {
        $id   = $_GET['id'];
        $query = mysqli_query($db, "SELECT * FROM recruitment WHERE id='$id'") or die('Query Error : '.mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id         = $data['id'];
          $posisi     = $data['posisi'];
          $refrensi   = $data['refrensi'];
          $nama_lengkap = $data['nama_lengkap'];
          $warga_negara = $data['warga_negara'];
          $tempat_lahir = $data['tempat_lahir'];
          $tanggal_lahir = $data['tanggal_lahir'];
          $agama      = $data['agama'];
          $jenis_kelamin = $data['jenis_kelamin'];
          $no_ktp     = $data['no_ktp'];
          $no_sim     = $data['no_sim'];
          $status_sipil = $data['status_sipil'];
          $alamat_email = $data['alamat_email'];
          $alamat_sekarang = $data['alamat_sekarang'];
          $alamat_domisili = $data['alamat_domisili'];
          $no_handphone = $data['no_handphone'];
          $telepon     = $data['telepon'];
          $pendidikan_terakhir = $data['pendidikan_terakhir'];
          $kemampuan_komputer = $data['kemampuan_komputer'];
          $bahasa_asing = $data['bahasa_asing'];
          $riwayat_penyakit = $data['riwayat_penyakit'];
          $pengalaman_kerja = $data['pengalaman_kerja'];
          $lama_pengalaman = $data['lama_pengalaman'];
          $foto = $data['foto'];
          $ktp = $data['ktp'];
          $ijazah = $data['ijazah'];
          $jadwal_interview = $data['jadwal_interview'];
          $post_date = $data['post_date'];
          $komentar = $data['komentar'];
          $status_pelamar = $data['status_pelamar'];
          $posisi_rekomendasi = $data['posisi_rekomendasi'];
          $berat_badan = $data['berat_badan'];
          $tinggi_badan = $data['tinggi_badan'];
        }
      }
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
          <div class="box">
            <div class="box-header">
              <h3 class="box-title info-user">Data Pelamar</h3>
              <div class="col-md-12">
                  <div class="col-md-6">
                    <img class="img-logo" src="img/hera-black.png">
                  </div>
                  <div class="col-md-6">
                    <img class="img-user-height" src="<?php echo $foto; ?>">
                  </div>
              </div>
              <div class="col-md-12 mg-bottom">
                <?php
                  $startdate = $jadwal_interview;
                  $expire = strtotime($startdate.'+1 days');  
            
                  if ($status_pelamar == "interview") {
                        echo '<span class="label label-warning">Interview</span>';
                    } elseif ($status_pelamar == "tidak interview"){
                        echo '<span class="label label-danger">Tidak Interview</span>';
                    } else {
                        echo '<span class="label label-info">Belum Interview</span>';
                    }
                ?>
              </div>
             <!--  
                <table>
                  <tbody>
                  <tr>
                    <td>Posisi</td>
                    <td>Nama Lengkap</td>
                    <td>Tempat Lahir</td>
                    <td>Agama</td>
                    <td>No KTP</td>
                    <td>Status Sipil</td>
                    <td>Alamat Sekarang</td>
                    <td>No Handphone</td>
                    <td>Pendidikan Terakhir</td>
                    <td>Bahasa Asing</td>
                    <td>Pengalaman Kerja</td>
                  </tr>
                  <tr>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                  </tr>
                  <tr>
                    <td><?php echo $posisi; ?></td>
                    <td><?php echo $refrensi; ?></td>
                    <td><?php echo $nama_lengkap; ?></td>
                    <td><?php echo $tempat_lahir; ?></td>
                    <td><?php echo $agama; ?></td>
                    <td><?php echo $no_ktp; ?></td>
                    <td><?php echo $status_sipil; ?></td>
                    <td><?php echo $alamat_sekarang; ?></td>
                    <td><?php echo $no_handphone; ?></td>
                    <td><?php echo $pendidikan_terakhir; ?></td>
                    <td><?php echo $bahasa_asing; ?></td>
                    <td><?php echo $pengalaman_kerja; ?></td>
                  </tr>
                  <tr>
                    <td>Refrensi</td>
                    <td>Warga Negara</td>
                    <td>Tanggal Lahir</td>
                    <td>Jenis Kelamin</td>
                    <td>No Sim</td>
                    <td>Alamat Email</td>
                    <td>Tinggi/Berat</td>
                    <td>No Telepon</td>
                    <td>Kemampuan Dimiliki</td>
                    <td>Riwayat Penyakit</td>
                    <td>Lama Pengalaman</td>
                  </tr>
                  <tr>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                    <td>:</td>
                  </tr>
                  <tr>
                    <td><?php echo $refrensi; ?></td>
                    <td><?php echo $warga_negara; ?></td>
                    <td><?php echo $tanggal_lahir; ?></td>
                    <td><?php echo $jenis_kelamin; ?></td>
                    <td><?php echo $no_sim; ?></td>
                    <td><?php echo $alamat_email; ?></td>
                    <td><?php echo $tinggi_badan; ?>/<?php echo $berat_badan; ?></td>
                    <td><?php echo $telepon; ?></td>
                    <td><?php echo $kemampuan_komputer; ?></td>
                    <td><?php echo $riwayat_penyakit; ?></td>
                    <td><?php echo $lama_pengalaman; ?></td>
                  </tr>
                  </tbody>
                </table> 
              -->
              
                <div class="col-md-6 pad-label">
                    <span class="label-user">Posisi</span>
                    <span class="field-user"><?php echo $posisi; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Refrensi</span>
                    <span class="field-user"><?php echo $refrensi; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Nama Lengkap</span>
                    <span class="field-user"><?php echo $nama_lengkap ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Warga Negara</span>
                    <span class="field-user"><?php echo $warga_negara; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Tempat Lahir</span>
                    <span class="field-user"><?php echo $tempat_lahir; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Tanggal Lahir</span>
                    <span class="field-user"><?php echo $tanggal_lahir; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Agama</span>
                    <span class="field-user"><?php echo $agama; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Jenis Kelamin</span>
                    <span class="field-user"><?php echo $jenis_kelamin; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">No KTP</span>
                    <span class="field-user"><?php echo $no_ktp; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">No SIM</span>
                    <span class="field-user"><?php echo $no_sim; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Status Sipil</span>
                    <span class="field-user"><?php echo $status_sipil; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Alamat Email</span>
                    <span class="field-user"><?php echo $alamat_email; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Alamat Sekarang</span>
                    <span class="field-user"><?php echo $alamat_sekarang; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Tinggi/Berat</span>
                    <span class="field-user"><?php echo $tinggi_badan; ?>/<?php echo $berat_badan; ?></span>
                </div>
                <div class="col-md-6">
                    <span class="label-user">No Handphone</span>
                    <span class="field-user"><?php echo $no_handphone; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">No Telepon</span>
                    <span class="field-user"><?php echo $telepon; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Pendidikan Terakhir</span>
                    <span class="field-user"><?php echo $pendidikan_terakhir; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Kemampuan Dimiliki</span>
                    <span class="field-user"><?php echo $kemampuan_komputer; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Bahasa Asing</span>
                    <span class="field-user"><?php echo $bahasa_asing; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Riwayat Penyakit</span>
                    <span class="field-user"><?php echo $riwayat_penyakit; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Pengalaman Kerja</span>
                    <span class="field-user"><?php echo $pengalaman_kerja; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Lama Pengalaman</span>
                    <span class="field-user"><?php echo $lama_pengalaman; ?></span>
                </div>
                <div class="col-md-6 pad-label">
                    <span class="label-user">Tanggal Post</span>
                    <span class="field-user"><?php echo $post_date ?></span>
                </div> 
             
              <div class="col-md-12 text-center">
                <div class="col-md-6">
                    <img class="img-user-width" src="<?php echo $ktp; ?>">
                </div>
                <div class="col-md-6">
                    <img class="img-user-width" src="<?php echo $ijazah; ?>">
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-header">
               <h3 class="box-title">Komentar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body pad">
              <form method="POST" action="">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="col-md-12">
                      <textarea id="editor1" name="komentar" rows="10" cols="80" placeholder="Komentar Anda">
                        <?php echo $komentar; ?>
                      </textarea>
                    </div>
                    <div class="col-md-6 form-group mg20">
                      <label>Status</label>
                      <select class="form-control" name="status_pelamar">
                        <option value="">-</option>
                        <option value="interview">Interview</option>
                        <option value="tidak interview">Tidak Interview</option>
                       <!--  
                          <option value="lolos-seleksi">Lolos Seleksi</option>
                          <option value="gagal-seleksi">Gagal Seleksi</option> 
                        -->
                      </select>
                    </div>
                    <div class="col-md-6 form-group mg20">
                      <label>Rekomendasi</label>
                      <input type="text" class="form-control" name="posisi_rekomendasi" value="<?php echo $posisi_rekomendasi; ?>">
                    </div>
                <div class="form-group col-md-12">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" id="send" value="Simpan">
                  <input type="submit" class="btn btn-warning btn-submit" name="export-pdf" id="pdf" value="Export PDF" href="javascript:void(0);" onclick="window.open('export-pdf.php?id=<?php echo $id; ?>')">
                </div>
              </form>
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
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

<?php
  include "library-js.php";
?>
</body>
</html>
<?php 
if (isset($_POST['simpan'])) {
  if (isset($_POST['id'])) {
    $id             = $_POST['id'];
    $komentar       = $_POST['komentar'];
    $status_pelamar = $_POST['status_pelamar'];
    $posisi_rekomendasi = $_POST['posisi_rekomendasi'];

    // perintah query untuk mengubah data pada tabel is_siswa
    $query = mysqli_query($db, "UPDATE recruitment SET komentar = '$komentar',
                            status_pelamar  = '$status_pelamar',
                            posisi_rekomendasi = '$posisi_rekomendasi'
                            WHERE id        = '$id'");   

    // cek query
    if ($query) {
      // jika berhasil tampilkan pesan berhasil update data
      header('Location: '.$_SERVER['REQUEST_URI']);
      // echo "Berhasil";
    } else {
      // jika gagal tampilkan pesan kesalahan
      // header('location: index.php?alert=1');
      echo "Gagal";
    } 
  }
} 
?>