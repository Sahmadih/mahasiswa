<?php
	include 'koneksi.php';
	$npm = @$_GET['npm'];
	$sql = mysqli_query($koneksi,"delete from mahasiswa where npm = '$npm'");
	
	
	if($sql){
		header('location:index.php?page=inputdata');
	} else{
		echo "Gagal Menghapus";
	}
	
?>