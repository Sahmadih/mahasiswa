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
	<title>Data Mahsiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<!-- <script type="text/javascript" src="jquery.js"></script> -->
</head>
<body onload="alert('Selamat Datang!');">

<div class="content">
	<header>
		<h1 class="judul">DAFTAR MAHASISWA</h1>
		<h3 class="deskripsi">Input Data Mahasiswa</h3>
		<marquee behavior="" direction="left">Selamat Datang Di Situs Pencarian Data Mahasiswa Universitas Islam Kalimantan Muhammad Arsyad Al Banjari Banjarmasin</marquee>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="login.php" id="login">Login</a></li>
			<li><a href="index.php" class="active">HOME</a></li>
			<li><a href="inputdata.php">Input & Edit</a></li>
			<li><a href="tampildata.php">Tampilkan Data</a></li>
			<li><a href="logout.php" id="lost";>Logout</a></li>
		</ul>
</div>

<div class="badan">
	<div class="halaman">
		<h3 style="text-align:center">Selamat Datang</h3>
	</div>
</div>

<script src="javascript/script.js"></script>
</body>
</html>

