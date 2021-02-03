<?php

    // memulai session
    session_start();

    // variable pendefinisian kredensial
    include 'koneksi.php';

    // mengambil isian dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

	if ( mysqli_num_rows($result) === 1 ) {

        // pengecekan kredensial login
        if ($row["username"] == $usernamelogin && $row["password"] == $passwordlogin && $row["nama"] == $namalogin) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: index.php");
        } 
        else {
            header("Location: login.php");
        }
	}
?>