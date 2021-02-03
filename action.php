<?php
include 'koneksi.php';
 
		
	$npm = @$_POST['npm']; 
	$nama = @$_POST['nama'];
	$tempat = @$_POST['tempat'];
	$tanggal = @$_POST['tanggal'];
	$jk = @$_POST['jk'];
	$alamat = @$_POST['alamat'];
	$pos = @$_POST['pos'];
	$tambah = @$_POST['tambah'];
	$edit = @$_POST['edit'];

	if($tambah){
		if($npm=="" || $nama=="" || $tempat=="" || $tanggal=="" || $jk=="" || $alamat=="" || $pos==""){
			echo"data tidak boleh ada yang kosong </br>";
		}else {
			$insert = "insert into mahasiswa(npm,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat,kode_pos) values('$npm','$nama','$tempat','$tanggal','$jk','$alamat','$pos')"; 
			mysqli_query($koneksi,$insert)or die(mysqli_error());
			
		}
	}
	
	if($edit){
		if($npm=="" || $nama=="" || $tempat=="" || $tanggal=="" || $jk=="" || $alamat=="" || $pos==""){
			echo"data tidak boleh ada yang kosong </br>";
		}else {
			$update = "update mahasiswa set nama = '$judul_buku', tempat_lahir = '$tempat', tanggal_lahir = '$tanggal', jenis_kelamin ='$jk', alamat = '$alamat', kode_pos = '$pos' where npm='$npm'"; 
			mysqli_query($koneksi,$update);
			
		}
	}
	
	if($hapus){
		$delete = "delete from mahasiswa where npm = '$npm'";
		mysqli_query($koneksi,$delete);
	}
    header("location:index.php?page=inputdata");
    
?>

