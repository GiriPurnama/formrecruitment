<?php 
	include "../config/koneksi.php"; 
	if (isset($_GET['id'])) {
	  	$id = $_GET['id'];
	  	
	  	$load_data = mysqli_query($db, "SELECT * FROM recruitment WHERE id='$id'");
	  	while ($row = mysqli_fetch_assoc($load_data)) {
	  		if (is_file("upload/".$row['foto'])) {
	  			unlink("upload/".$row['foto']);
	  		}
	  		if (is_file("upload/".$row['ktp'])) {
	  			unlink("upload/".$row['ktp']);
	  		}
	  		if (is_file("upload/".$row['ijazah'])) {
	  			unlink("upload/".$row['ijazah']);
	  		}
	  	}
	  	$query_delete = mysqli_query($db, "DELETE FROM recruitment WHERE id='$id'");
	  	if ($query_delete) {
	  		header('location: data-user.php');
	  	} else{
	  		echo "gagal";
	  	}
  	}
?>