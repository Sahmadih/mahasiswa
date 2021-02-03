<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style type="text/css">

        body{
            font-family: arial;
            font-size: 14px;
            background:url(assets/uniska.png);
            background-size: 100px;
        }    
        .badan{
            width: 450px;
            margin: 0 auto;
            margin-top: 12%;

        }

        .halaman{
            padding: 15px;
            text-align: center;
            color: #fff;
            font-size: 20px;
            background-color: #5F9EA0;
            border-bottom: 3px solid black;
        }
        .inputan{
            background-color: #ccc;
            padding: 20px;
            border-bottom-right-radius:10px;
            border-bottom-left-radius: 10px;
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
    
<div class="badan">

    <form method="post" action="action-login.php">
        <table border="0" align="center" >
            <tr>
                <td colspan="3" align="center" class="halaman"><h2> Login Mahasiswa</h2>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" class="form-control"/></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" class="form-control"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" class="form-control"/></td>
            </tr>
            <tr>
                <td><input type="submit" name="login"  value="Login" class="btn btn-default dropdown-toggle btn-sm" />
                    <input type="reset" value="Reset" class="btn btn-default dropdown-toggle btn-sm" />
                    <a href="registrasi.php" class="btn btn-default dropdown-toggle btn-sm">Registrasi</a>
            </tr>
            <?php
                    include "koneksi.php";
                    $nama= @$_POST['nama'];
                    $username = @$_POST['username'];
                    $password = @$_POST['password'];
                    $daftar = @$_POST['daftar'];
                    $login = @$_POST['login'];

                    if($login){
                        if($nama =="" || $password ==""){
                            echo"USERNAME/PASWORD kosong";
                            ?><script type="text/javascript">alert('USERNAME/PASSOWRD tidak boleh kosong');</script><?php
                        }else{
                            $query =mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password =('$password')");
                            $data = mysqli_fetch_array($query);
                            $cek = mysqli_num_rows($query);

                                if($cek >= 1){
                                    if($data['status']== "mahasiswa"){
                                        @$_SESSION['mahasiswa'] =$data['username'];
                                        header("location:index.php?page=tampildata");
                                    }
                                }
                                else{
                                    ?>
                                        <script type="text/javascript">alert('NPM/PASSWORD salah');</script>
                                    <?php
                                    echo "NPM/PASSWORD salah";
                                }
                            
                        }
                    }
                ?>
        </table>
    </form>
</div>

</body>
</html>