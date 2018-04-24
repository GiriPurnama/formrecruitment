<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
			<div class="info-user">
			</div>

			<div id="labelSuccess" class='alert alert-success alert-dismissible' role='alert'>
	            <strong><i class='glyphicon glyphicon-ok-circle'></i> Terimakasih </strong> Data berhasil disimpan.
            </div>

				<div class="formUser">
					<form id="formPelamar" method="post"  enctype="multipart/form-data">
						<div class="form-group col-md-6">
							<label for="Posisi">Posisi yang Dilamar* :</label>
    						<input type="text" class="form-control" id="position" name="posisi" required>
						</div>
						<div class="form-group col-md-6 ghost">
						  <label for="Refrensi">Refrensi* :</label>
						  <select class="form-control opacity0" id="refrensi" name="refrensi">
						  	<option value="">-</option>
						    <option value="ANGGA">Angga</option>
						    <option value="ZALORA">Zalora</option>
						    <option value="CHERYL">Cheryl</option>
						    <option value="NOVI">Novi</option>
						    <option value="SRI">Sri</option>
						    <option value="WIDYA">Widya</option>
						    <option value="JANNAH">Jannah</option>
						    <option value="1">Lainnya</option>
						  </select>
						  <!-- <input type="text" class="form-control hide" id="idRefrensi" name="refrensi"> -->
						</div>
						<div class="form-group col-md-6">
							<label for="Nama">Nama Lengkap* :</label>
    						<input type="text" class="form-control" id="fullName" autocomplete="off" name="nama_lengkap" required>
						</div>
						<div class="form-group col-md-6">
							<label for="wargaNegara">Warga Negara :</label>
    						<input type="text" class="form-control" id="wargaNegara" name="warga_negara">
						</div>
						<div class="form-group col-md-6">
							<label for="tempat_lahir">Tempat Lahir* :</label>
    						<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
						</div>
						<div class="form-group col-md-6">
							<label for="tanggal_lahir">Tanggal Lahir* :</label>
    						<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required readonly>
						</div>
						<div class="form-group col-md-6">
						  <label for="Agama">Agama* :</label>
						  <select class="form-control opacity0" id="agama" name="agama">
						   	<option value="">-</option>
						    <option value="ISLAM">Islam</option>
						    <option value="KRISTEN PROTESTAN">Kristen Protestan</option>
						    <option value="KRISTEN KATOLIK">Kristen Katolik</option>
						    <option value="HINDU">Hindu</option>
						    <option value="BUDDHA">Buddha</option>
						  </select>
						</div>
						<div class="form-group col-md-6">
							<label for="idJk">Jenis Kelamin* :</label>
							<div class="radio">
							  <label><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki - Laki</label>
							</div>
							<div class="radio">
							  <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="idCart">No.KTP* :</label>
    						<input type="text" class="form-control" id="idCard" autocomplete="off" name="no_ktp" onKeyPress="return goodchars(event,'0123456789',this)" required>
						</div>
						<div class="form-group col-md-6">
							<label for="idSim">No.SIM:</label>
    						<input type="text" class="form-control" name="no_sim" autocomplete="off" id="idSim" onKeyPress="return goodchars(event,'0123456789',this)">
						</div>
						<div class="form-group col-md-6">
						  <label for="status_sipil">Status Sipil* :</label>
						  <select class="form-control opacity0" id="status_sipil" name="status_sipil">
						  	<option value="">-</option>
						    <option value="Menikah">Menikah</option>
						    <option value="Lajang">Lajang</option>
						    <option value="Duda">Cerai</option>
						  </select>
						</div>
						<div class="form-group col-md-6">
							<label for="alamat_email">Alamat Email* :</label>
    						<input type="email" class="form-control" autocomplete="off" id="alamat_email" name="alamat_email" required>
						</div>
						<div class="form-group col-md-6">
							<div class="col-md-6" style="padding-left:0px;">
								<label for="berat_badan">Berat Badan* :</label>
    							<input type="text" name="berat_badan" id="berat_badan" autocomplete="off" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" required>
							</div>
							<div class="col-md-6" style="padding-left:0px;">
								<label for="berat_badan">Tinggi Badan* :</label>
    							<input type="text" name="tinggi_badan" id="tinggi_badan" autocomplete="off" class="form-control" onKeyPress="return goodchars(event,'0123456789',this)" required>
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="alamat_sekarang">Alamat Sekarang* :</label>
    						<textarea name="alamat_sekarang" id="alamat_sekarang" class="form-control textareaSekarang" style="height:34px;"></textarea>
						</div>
						<div class="form-group col-md-6">
							<label for="noHandphone">No Handphone* :</label>
    						<input type="text" class="form-control" id="idHandphone" name="no_handphone" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" required>
						</div>
						<div class="form-group col-md-6">
							<label for="telepon">Telepon :</label>
    						<input type="text" class="form-control" id="idTelepon" name="telepon" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)">
						</div>
						
						<div class="form-group col-md-6">
							<label for="kemampuan">Kemampuan Dimiliki* :</label>
    						<input type="text" class="form-control" autocomplete="off" id="skill" name="kemampuan_komputer" required>
						</div>
						<div class="form-group col-md-6">
						  <div class="col-md-6" style="padding-left:0px;">
							  <label for="pendidikan_terakhir">Pendidikan Terakhir* :</label>
							  <select class="form-control opacity0" id="pendidikan_terakhir" name="pendidikan_terakhir">
							  	<option value="">-</option>
							    <option value="SMA">SMA</option>
							    <option value="D3">D3</option>
							    <option value="S1">S1</option>
							    <option value="S2">S2</option>
							    <option value="S3">S3</option>
							  </select>
						  </div>
						  <div class="col-md-6" style="padding-left:0px; padding-left:5px;">
						  	<label for="pendidikan_terakhir">Apakah Sedang Kuliah?*</label>
						  	  <span class="radio-2">
							  	<input type="radio" name="kuliah" value="KULIAH"><label>KULIAH</label>
						  	  </span>
						  	  <span class="radio-2">
							  	<input type="radio" name="kuliah" value="SUDAH LULUS"><label>SUDAH LULUS</label>
						  	  </span>
							
						  </div>
						</div>
						<div class="form-group col-md-6">
						  <label for="bahasa" class="wd100">Bahasa Asing :</label>
						  	<label class="radio-inline"><input type="radio" name="bahasa_asing" value="INGGRIS">INGGRIS</label>
							<label class="radio-inline"><input type="radio" name="bahasa_asing" value="MANDARIN">MANDARIN</label>
							<label class="radio-inline"><input type="radio" name="bahasa_asing" value="JEPANG">JEPANG</label>
							<label class="radio-inline"><input type="radio" name="bahasa_asing" value="JERMAN">JERMAN</label>
						</div>
						<div class="form-group col-md-6">
							<label for="riwayat">Riwayat Penyakit :</label>
    						<input type="text" class="form-control" autocomplete="off" id="riwayat" name="riwayat_penyakit">
						</div>
						<div class="form-group col-md-6">
							<label for="pengalaman">Pengalaman Pekerjaan* :</label>
    						<input type="text" class="form-control" autocomplete="off" id="pengalaman_kerja" name="pengalaman_kerja" required>
						</div>
						<div class="form-group col-md-6">
						  <label for="lama_pengalaman">Lama Pengalaman* :</label>
						  <select class="form-control opacity0" id="lama_pengalaman" name="lama_pengalaman">
						  	<option value="">-</option>
						    <option value="1 TAHUN KURANG">1 Tahun Kurang </option>
						    <option value="1 TAHUN">1 Tahun</option>
						    <option value="2 TAHUN">2 Tahun</option>
						    <option value="3 TAHUN">3 Tahun</option>
						    <option value="4 TAHUN">4 Tahun</option>
						    <option value="5 TAHUN">5 Tahun</option>
						    <option value="5 TAHUN LEBIH">5 Tahun Lebih</option>
						  </select>
						</div>
						<div class="form-group col-md-6">
							<label for="foto">Upload Foto* :</label>
    						<input type="file" accept="image/*" class="form-control" id="foto" name="foto" required>
    						<span class="small-font">Ukuran Foto Maksimal <b>1 MB</b>*</span>
						</div>
						<div class="form-group col-md-6">
							<label for="ktp">Upload KTP* :</label>
    						<input type="file" accept="image/*" class="form-control" id="ktp" name="ktp" required>
							<span class="small-font">Ukuran KTP Maksimal <b>1 MB</b>*</span>
						</div>
						<div class="form-group col-md-6">
							<label for="ijazah">Upload Ijazah* :</label>
    						<input type="file" accept="image/*" class="form-control" id="ijazah" name="ijazah" required>
							<span class="small-font">Ukuran Ijazah Maksimal <b>1 MB</b>*</span>
						</div>
						<!-- <div class="form-group col-md-6">
							<label for="jadwal_interview">Jadwal Interview* :</label>
    						<input type="text" class="form-control" id="jadwal_interview" name="jadwal_interview" required>
						</div> -->
						<div class="form-group col-md-6">
							<label for="kemampuan">Promosikan Diri Anda* :</label>
    						<input type="text" class="form-control" autocomplete="off" id="promosiDiri" name="promosi_diri" required>
						</div>
					</form>
					<div class="form-group col-md-12">
						<input type="submit" class="btn btn-primary btn-submit" name="simpan" id="send" value="Kirim">
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
<script language="javascript">
      function getkey(e)
      {
        if (window.event)
          return window.event.keyCode;
        else if (e)
          return e.which;
        else
          return null;
      }

      function goodchars(e, goods, field)
      {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
       
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
       
        // check goodkeys
        if (goods.indexOf(keychar) != -1)
            return true;
        // control keys
        if ( key==null || key==0 || key==8 || key==9 || key==27 )
          return true;
          
        if (key == 13) {
            var i;
            for (i = 0; i < field.form.elements.length; i++)
                if (field == field.form.elements[i])
                    break;
            i = (i + 1) % field.form.elements.length;
            field.form.elements[i].focus();
            return false;
            };
        // else return false
        return false;
    }
</script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {

		
		
		$("#labelSuccess").hide();

		$(document).on('click', '.btn-submit', function(){

			if (CheckValidasiPeserta() == true) {

			    var data = new FormData(this);
				data.append('posisi', $('#position').val());
				data.append('refrensi', $('#refrensi').val());
				data.append('nama_lengkap', $('#fullName').val());
				data.append('warga_negara', $('#wargaNegara').val());
				data.append('tempat_lahir', $('#tempat_lahir').val());
				data.append('tanggal_lahir', $('#tanggal_lahir').val());
				data.append('agama', $('#agama').val());
				data.append('jenis_kelamin', $("input[name='jenis_kelamin']:checked").val());
				data.append('no_ktp', $('#idCard').val());
				data.append('no_sim', $('#idSim').val());
				data.append('status_sipil', $('#status_sipil').val());
				data.append('alamat_email', $('#alamat_email').val());
				data.append('berat_badan', $('#berat_badan').val());
				data.append('tinggi_badan', $('#tinggi_badan').val());
				data.append('alamat_sekarang', $('#alamat_sekarang').val());
				data.append('no_handphone', $('#idHandphone').val());
				data.append('telepon', $('#idTelepon').val());
				data.append('kemampuan_komputer', $('#skill').val());
				data.append('pendidikan_terakhir', $('#pendidikan_terakhir').val());
				data.append('kuliah', $("input[name='kuliah']:checked").val());
				data.append('bahasa_asing', $("input[name='bahasa_asing']:checked").val());
				data.append('riwayat_penyakit', $('#riwayat').val());
				data.append('pengalaman_kerja', $('#pengalaman_kerja').val());
				data.append('lama_pengalaman', $('#lama_pengalaman').val());
				data.append('foto', $('#foto')[0].files[0]);
				data.append('ktp', $('#ktp')[0].files[0]);
				data.append('ijazah', $('#ijazah')[0].files[0]);
				data.append('promosi_diri', $('#promosiDiri').val());

				$.ajax({
					 url : "datafiles/insert.php",  
					 method: 'POST',
					 cache: false,
					 contentType: false,
					 processData: false,
					 data : data,
					 success: function(data){
					    $("#labelSuccess").show();
					    $("#labelSuccess").delay(3000).fadeOut('slow');
					    $('#formPelamar').trigger("reset");
					    $("html, body").animate({ scrollTop: 0 }, "slow");
					 }
				});
			} else {
				CheckValidasiPeserta();
			}

		  });

		$('#refrensi').change(function(){
		    if( $(this).val() == '1'){
		        $('#refrensi').removeAttr('name');
		        // $('.ghost').append('<select class="form-control opacity0" id="refrensi"><option value="">-</option><option value="ANGGA">Angga</option><option value="ZALORA">Zalora</option><option value="CHERYL">Cheryl</option><option value="NOVI">Novi</option><option value="SRI">Sri</option><option value="WIDYA">Widya</option><option value="JANNAH">Jannah</option><option value="1">yang lain</option></select>');
		        $('.ghost').append('<input class="form-control" id="myInput" type="text" name="refrensi" />');
		    }else{
		    	$('#refrensi').attr('name', 'refrensi');
		        $('#myInput').remove();
		    }
		});

    	$("#tanggal_lahir").datepicker();
    	$("#jadwal_interview").datepicker({
    		format: 'yyyy-mm-dd'
    	});

    	$(".danger-text").hide();

		function CheckValidasiPeserta(){
	  		var status = true;

	  		var imageSize = $('#foto, #ktp, #ijazah')[0].files[0].size;
  			var sizeImg = 1048576;

	        if($("input[name='posisi']").val()===""){
	        	$("input[name='posisi']").addClass("error-field");
	            status = false;
	        }else{
	        	$("input[name='posisi']").removeClass('error-field');
	        }
	        
	        if($("input[name='nama_lengkap']").val()===""){
	        	$("input[name='nama_lengkap']").addClass("error-field");
	            status = false;
	        }else{
	        	$("input[name='nama_lengkap']").removeClass('error-field');
	        }

	        if($("input[name='tempat_lahir']").val()===""){
	        	$("input[name='tempat_lahir']").addClass("error-field");
	            status = false;
	        }else{
	        	$("input[name='tempat_lahir']").removeClass('error-field');
	        }

	        if($("input[name='tanggal_lahir']").val()===""){
	        	$("input[name='tanggal_lahir']").addClass("error-field");
	            status = false;
	        }else{
	        	$("input[name='tanggal_lahir']").removeClass('error-field');
	        }

	        if($("input[name='no_ktp']").val()===""){
	        	$("input[name='no_ktp']").addClass("error-field");
	            status = false;
	        }else{
	        	$("input[name='no_ktp']").removeClass('error-field');
	        }

	        if($("input[name='alamat_email']").val()===""){
	        	$("input[name='alamat_email']").addClass("error-field");
	            status = false;
	        }else{
	        	$("input[name='alamat_email']").removeClass('error-field');
	        }

	        if($(".textareaSekarang").val()===""){
	        	$(".textareaSekarang").addClass("error-field");
	            status = false;
	        }else{
	        	$(".textareaSekarang").removeClass('error-field');
	        }

	        if($(".textareaDomisili").val()===""){
	        	$(".textareaDomisili").addClass("error-field");
	            status = false;
	        }else{
	        	$(".textareaDomisili").removeClass('error-field');
	        }

	        if($("input[name='no_handphone']").val()===""){
	        	$("input[name='no_handphone']").addClass("error-field");
	            status = false;
	        }else{
	        	$("input[name='no_handphone']").removeClass('error-field');
	        }

	        if($("input[name='kemampuan_komputer']").val()===""){
	        	$("input[name='kemampuan_komputer']").addClass("error-field");
	            status = false;
	        }else{
	        	$("input[name='kemampuan_komputer']").removeClass('error-field');
	        }

	        if($("input[name='pengalaman_kerja']").val()===""){
	        	$("input[name='pengalaman_kerja']").addClass("error-field");
	            status = false;
	        }else{
	        	$("input[name='pengalaman_kerja']").removeClass('error-field');
	        }
	        if($("#promosiDiri").val()===""){
	        	$("#promosiDiri").addClass("error-field");
	            status = false;
	        }else{
	        	$("#promosiDiri").removeClass('error-field');
	        }
	        if($("input[name='tinggi_badan']").val()===""){
	        	$("input[name='tinggi_badan']").addClass("error-field");
	            status = false;
	        }else{
	        	$("input[name='tinggi_badan']").removeClass('error-field');
	        }
	        if($("input[name='berat_badan']").val()===""){
	        	$("input[name='berat_badan']").addClass("error-field");
	            status = false;
	        }else{
	        	$("input[name='berat_badan']").removeClass('error-field');
	        }


	        var ddl = document.getElementById("refrensi");
 			var selectedValue = ddl.options[ddl.selectedIndex].value;
	        if (selectedValue=="") {
	        	$("#refrensi").addClass("error-field");
	        	status = false;
	        } else {
	        	$("#refrensi").removeClass("error-field");
	        }

	        var dd2 = document.getElementById("agama");
 			var selectedValue2 = dd2.options[dd2.selectedIndex].value;
	        if (selectedValue2=="") {
	        	$("#agama").addClass("error-field");
	        	status = false;
	        } else {
	        	$("#agama").removeClass("error-field");
	        }

	        var dd3 = document.getElementById("agama");
 			var selectedValue3 = dd3.options[dd3.selectedIndex].value;
	        if (selectedValue3=="") {
	        	$("#agama").addClass("error-field");
	        	status = false;
	        } else {
	        	$("#agama").removeClass("error-field");
	        }

	        var dd4 = document.getElementById("status_sipil");
 			var selectedValue4 = dd4.options[dd4.selectedIndex].value;
	        if (selectedValue4=="") {
	        	$("#status_sipil").addClass("error-field");
	        	status = false;
	        } else {
	        	$("#status_sipil").removeClass("error-field");
	        }

	        var dd5 = document.getElementById("pendidikan_terakhir");
 			var selectedValue5 = dd5.options[dd5.selectedIndex].value;
	        if (selectedValue5=="") {
	        	$("#pendidikan_terakhir").addClass("error-field");
	        	status = false;
	        } else {
	        	$("#pendidikan_terakhir").removeClass("error-field");
	        }

	        var dd6 = document.getElementById("lama_pengalaman");
 			var selectedValue5 = dd5.options[dd5.selectedIndex].value;
	        if (selectedValue5=="") {
	        	$("#lama_pengalaman").addClass("error-field");
	        	status = false;
	        } else {
	        	$("#lama_pengalaman").removeClass("error-field");
	        }

	        if($("input[name='jenis_kelamin']").is(':checked')=="") { 
	        	$('.radio').addClass("error-field");
	        	status = false;
	        } else{
	        	$('.radio').removeClass("error-field");
	        }

	        if($("input[name='kuliah']").is(':checked')=="") { 
	        	$('.radio-2').addClass("error-field");
	        	status = false;
	        } else{
	        	$('.radio-2').removeClass("error-field");
	        }

	        if( document.getElementById("foto").files.length == 0 ){
    			$("#foto").addClass("error-field-file");
			} else if(imageSize >= sizeImg){
    			$("#foto").addClass("error-field-file");
    			alert("Ukuran Foto harus Kurang dari 1 MB");
    			status = false;
			} else {
				$("#foto").removeClass("error-field-file");
			}

			if( document.getElementById("ktp").files.length == 0 ){
    			$("#ktp").addClass("error-field-file");
    			status = false;
			} else if(imageSize >= sizeImg){
				$("#ktp").addClass("error-field-file");
				alert("Ukuran KTP harus Kurang dari 1 MB"); 
				status = false;
			} else {
				$("#ktp").removeClass("error-field-file");
			}

			if( document.getElementById("ijazah").files.length == 0 ){
    			$("#ijazah").addClass("error-field-file");
    			status = false;
			} else if(imageSize >= sizeImg){
				$("#ijazah").addClass("error-field-file");
				alert("Ukuran Ijazah harus Kurang dari 1 MB");
				status = false;
			} else {
				$("#ijazah").removeClass("error-field-file");
			}

	        return status;
        
    	}
	});
</script>
