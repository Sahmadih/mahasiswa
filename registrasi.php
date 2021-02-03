<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<style type="text/css">

		body{
		    font-family: arial;
		    font-size: 14px;
		    background:url(assets/uniska.png);
		    background-size: 100px;
		}    
		.container{
		    width: 300px;
		    margin: 0 auto;
		    margin-top: 12%;

		}

		#judul{
		    padding: 15px;
		    text-align: center;
		    color: #fff;
		    font-size: 20px;
		    background-color: #5F9EA0;
		    border-bottom: 3px solid black;
		}
		#inputan{
		    background-color: #DCDCDC;
		    padding: 20px;
		    border-bottom-right-radius:10px;
		    border-bottom-left-radius: 10px;
		}

		form-group{
		    padding:10px;
		    border: 0;
		}

		.form-control{
		    width: 240px;
		}

		.btn{
			padding: 5px;
		    background-color: #B22222;
		    margin-top: 10px;
		    border-radius: 10px;
		    border-bottom: 5px;
		    color: #fff;
		}
		.btn:hover{
		    background-color:#FFFF00;
		    cursor: pointer;
		}
    </style>
</head>
	
<body>

	<div class="container">
		<div id="judul">
            Daftar Akun
        </div>
		<form method="post">
		<div id="inputan">
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="Password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Status</label>
				<input type="text" name="status" class="form-control" value="mahasiswa" readonly>
			</div>
			<button type="submit" name="btnregister" class="btn btn-primary">
				Register
			</button>
			<button type="reset" class="btn btn-danger">
				Reset
			</button>
		</div>
		</form>
		<?php
    include "koneksi.php";
    if(isset($_POST['btnregister']))
    {
        $username = $_POST['username'];
		$password = $_POST['password'];
		$nama = $_POST['nama'];
        $status = $_POST['status'];

        mysqli_query($koneksi,"INSERT INTO users VALUE('','$username','$password','$nama','$status'
        )") or die (mysqli_error($koneksi));

       echo "<div align='center'><h3> SEDANG PROSES...</h3></div>";
       header("location:login.php");
    }
?>
	</div>
	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

</body>
</html>