
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
			<li><a href="inputdata.php" class="active">Input & Edit</a></li>
			<li><a href="tampildata.php">Tampilkan Data</a></li>
			<li><a href="logout.php" id="lost";>Logout</a></li>
		</ul>
</div>

<div class="badan">
<div class="halaman">
	<h3 text-align="center">Pengimputan Nama Mahasiswa</h3>
	<form action="action.php" method="POST">    
		<table>
			
			<tr>
			<td>NPM</td> 
			<td><input type="text" name="npm"/> </td>
			</tr>
			<tr>
			<td>Nama </td>
			<td><input type="text" name="nama"/> </td>
			</tr>
			
			<tr>
			<td>Tempat Lahir </td>
			<td><input type="text" name="tempat"/> </td>
			</tr>
			
			<tr>
			<td>Tanggal Lahir: </td>
			<td><input type="date" name="tanggal"/> </td>
			</tr>
			<tr>
			<td>Jenis Kelamin</td>
			<td><select name="jk">
			<option value="L">Laki-Laki</option>
			<option value="P">Perempuan</option>
			</select></td>
			</tr>
			<tr>
			<td>Alamat </td>
			<td><textarea name="alamat"></textarea> </td>
			</tr>
			<tr>
			<td>Kode Pos </td>
			<td><input type="text" name="pos"/> </td>
			</tr>
			<tr>
			<td><input type="submit" name="tambah" value="Input"/></td>
			</tr>
			</table>
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
			<th>Setting</th>
		</tr>
		<?php
			include 'koneksi.php'; //koneksi database
			$sql_mahasiswa = "select * from mahasiswa"; //sql
			$eksekusi = mysqli_query($koneksi,$sql_mahasiswa)or die(mysqli_error()); //eksekusi sql
			while($tabel = mysqli_fetch_array($eksekusi)) { 		//tampil data
		?>
		<tr>
		<td><?php echo $tabel['npm']; ?></td>			
		<td><?php echo $tabel['nama']; ?></td>
		<td><?php echo $tabel['tempat_lahir']; ?></td>
		<td><?php echo $tabel['tanggal_lahir']; ?></td>
		<td><?php echo $tabel['jenis_kelamin']; ?></td>
		<td><?php echo $tabel['alamat']; ?></td>
		<td><?php echo $tabel['kode_pos']; ?></td>
		<td align="center">
			<a href="index.php?page=edit&action&npm=<?= $tabel['npm'];?>"> <!-- tombol edit -->
				<button>Edit</button>
			</a>
			<a onclick="return confirm('Hapus data?')" href="hapus.php?npm=<?= $tabel['npm'];?>"> <!--tombol hapus -->
			<button>Hapus</button> 
			</a>
		</td>

		</tr>
		<?php } 
			
		?>
	</table>
</div>


<script src="javascript/script.js"></script>
</body>
</html>



