<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<div class="content">
	<header>
		<h1 class="judul">DAFTAR MAHASISWA</h1>
		<h3 class="deskripsi">Input Data Mahasiswa</h3>
		<marquee behavior="" direction="left">Selamat Datang Di Situs Pencarian Data Mahasiswa Universitas Islam Kalimantan Muhammad Arsyad Al Banjari Banjarmasin</marquee>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="login.php" id="login">Login</a></li>
			<li><a href="index.php">HOME</a></li>
			<li><a href="inputdata.php">Input & Edit</a></li>
			<li><a href="tampildata.php" class="active">Tampilkan Data</a></li>
			<li><a href="logout.php" id="lost">Logout</a></li>
		</ul>
</div>

<div class="badan">
	<div class="halaman"> 
		<h3 text-align="center">Tabel Mahasiswa</h3>

		<form action="" method="POST">
			<label>Cari :</label>
			<input type="text" name="cari" placeholder="NPM atau Nama">
			<input type="submit" name="tombol_cari" value="Cari">
		</form>

		<table width="100%" border="1px solid;">
			<tr>
				<th>NPM</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Kode Post</th>
				
			</tr>
			<?php
				include 'koneksi.php';
				$sql_master = "select * from mahasiswa";
				$cari= @$_POST['cari'];
				$tbl_cari=@$_POST['tombol_cari'];
				if ($tbl_cari) {
					if ($cari != "") {
						$pencarian = mysqli_query($koneksi,"select * from mahasiswa where npm like '%$cari%'
																	OR nama LIKE '%$cari%'")
						or die(mysqli_error());
					}else{
						$pencarian = mysqli_query($koneksi,$sql_master)or die(mysqli_error());
					}
					
				}else {
					$pencarian = mysqli_query($koneksi,$sql_master)or die(mysqli_error());
				}
				
				while($tabel = mysqli_fetch_array($pencarian)) { //tampil data
			?>
			<tr>
				<td><?php echo $tabel['npm']; ?></td>
				<td><?php echo $tabel['nama']; ?></td>
				<td><?php echo $tabel['tempat_lahir']; ?></td>
				<td><?php echo $tabel['tanggal_lahir']; ?></td>
				<td><?php echo $tabel['jenis_kelamin']; ?></td>
				<td><?php echo $tabel['alamat']; ?></td>
				<td><?php echo $tabel['kode_pos']; ?></td>
			</tr>
			<?php }?>
		</table>
	</div>
</div>

<script src="javascript/script.js"></script>
</body>
</html>






