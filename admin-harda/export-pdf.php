
<!DOCTYPE html>
<html>
  <?php 
    ob_start();
    include "library-css.php";
    require_once "plugins/html2pdf/html2pdf.class.php"
  ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

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
        }
      }
  ?>

  <div class="content-wrapper">
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
                  if ($status_pelamar == "interview") {
                      echo '<span class="label label-warning">Sudah Interview</span>';
                  } elseif ($status_pelamar == "lolos-seleksi") {
                      echo '<span class="label label-success">Lolos Seleksi</span>';
                  } elseif ($status_pelamar == "gagal-seleksi") {
                      echo '<span class="label label-danger">Gagal Seleksi</span>';
                  } else {
                      echo '<span class="label label-info">Belum Interview</span>';
                  }
                ?>
              </div>
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
                  <span class="label-user">Alamat Domisili</span>
                  <span class="field-user"><?php echo $alamat_domisili; ?></span>
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
                  <span class="label-user">Kemampuan Komputer</span>
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
                  <span class="label-user">Jadwal Interview</span>
                  <span class="field-user"><?php echo $jadwal_interview ?></span>
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
            </div>
            <div class="box-body pad">
              <div class="col-md-12">
                <textarea id="editor1" name="komentar" rows="10" cols="80" placeholder="Komentar Anda">
                  <?php echo $komentar; ?>
                </textarea>
              </div>
            
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
  <div class="control-sidebar-bg"></div>
</div>
<?php
  $filename="pelamar-".$nama_lengkap.".pdf"; 
 $content = ob_get_clean();
 $content = '<page style="font-family: arial">'.nl2br($content).'</page>';
 try
 {
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(30, 0, 20, 0));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
  $html2pdf->Output($filename);
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>
</body>
</html>
?>