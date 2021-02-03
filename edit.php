<div class="halaman">
<?php


include 'koneksi.php';
$npm = @$_GET['npm'];
$sql = mysqli_query($koneksi,"select * from mahasiswa where npm = '$npm'"); //query sql
$data = mysqli_fetch_array($sql);  //kolom tabel



?>

<form action="action.php" method="POST">    
	<table>
		
		<tr>
		<td>NPM</td> 
		<td><input type="text" name="npm" value="<?php echo $data['npm'];?>" readonly /> </td>
		</tr>
		<tr>
		<td>Nama </td>
		<td><input type="text" name="nama" value="<?php echo $data['nama'];?>"/> </td>
		</tr>
		<tr>
		<td>Tempat Lahir </td>
		<td><input type="text" name="tempat" value="<?php echo $data['tempat_lahir'];?>"/> </td>
		</tr>
		<tr>
		<td>Tanggal Lahir </td>
		<td><input type="date" name="tanggal" value="<?php echo $data['tanggal_lahir'];?>"/> </td>
		</tr>
		<tr>
		<td>Jenis Kelamin </td>
		<td>
			<select name="jk" selected="<?php echo $data['tanggal_lahir'];?>">
			<option value="L">Laki-Laki</option>
			<option value="P">Perempuan</option>
			</select>
		</td>
		</tr>
		<tr>
		<td>Alamat </td>
		<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"/> </td>
		</tr>
		
		<tr>
		<td>Kode Pos: </td>
		<td><input type="text" name="pos" value="<?php echo $data['kode_pos'];?>"/> </td>
		</tr>
		<tr>
		<td><input type="submit" name="edit" value="Input"/></td>
		</tr>
		</table>
</form>

</div>