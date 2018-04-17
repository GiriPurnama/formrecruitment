<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.min.css">
	<title>Recruitment PT Harda Esa Raksa</title>
</head>
<body>
	<div class="logoHarda">
		<marquee><img src="image/logoPng_harda.png"></marquee>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="box-information">
				<?php  
				  if (empty($_GET['alert'])) {
				    echo "";
				  } elseif ($_GET['alert'] == 1) {
				    echo "<div class='alert alert-danger alert-dismissible box-alert' role='alert'>
				            <strong><i class='glyphicon glyphicon-alert'></i> Gagal</strong> Terjadi kesalahan.
				          </div>";
				  } elseif ($_GET['alert'] == 2) {
				    echo "<div class='alert alert-success alert-dismissible box-alert' role='alert'>
				            <strong><i class='glyphicon glyphicon-ok-circle'></i> Berhasil</strong> Terimakasih telah registrasi.
				          </div>";
				  } 
				?>
					<div class="back-link">
						<a href="index.php">Kembali</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="col-md-6">
			<p class="address-footer left">	
				<strong>Copyright &copy; 2018 <a href="http://www.pthardaesaraksa.com" target="_BLANK">PT Harda Esa Raksa</a>.</strong> All rights
			</p>
			<div class="text-left">
                <a href=""><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href=""><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href=""><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href=""><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
			</div>
		</div>
		<div class="col-md-6">
			<p class="address-footer right"> ILP Building 3rd Floor Suite 15 Pasar
			Minggu Raya No. 39a Pancoran,</p>
			<p class="address-footer right">
			South Jakarta 12780 
			</p>
		</div>
	</footer>
	
</body>
</html>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
</script>
