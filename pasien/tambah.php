<?php 
require '../pungsi.php';
if (isset($_POST['kirim'])) {
	if (tambah($_POST)>0) {
			echo "<script> alert('data berhasil dirubah'); 
		document.location.href='daftar.php';
		</script>
		";
	}
	else{
				echo "<script> alert('data berhasil dirubah'); 
		decument.location.href='daftar.php';
		</script>
		";
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
	margin: 0;
	padding: 0;
}
		body{
	background-color: pink;
}
.y{
	position: fixed;
	right: 0;
	left: 0;
	background-color: red;
	text-align: center;
	color: yellow;
	bottom: 0;
	font-family: sans-serif;

}
	</style>
</head>
<body>
	<form action="" method="POST">
<table>
	<tr>
	<td>norm</td>
	<td><input type="text" name="a"></td>
	</tr>
	<tr>
	<td>no id pasien</td>
	<td><input type="text" name="b"></td>
	</tr>
	<tr>
	<td>jenis id</td>
	<td>
		<select name="c">
			<option>KTP</option>
			<option>SIM</option>
			<option>PASPORT</option>
			<option>LAINYA</option>
			

		</select>
	</td>
	</tr>
	<tr>
	<td>namapasien</td>
	<td><input type="text" name="d"></td>
	</tr>
	<tr>
	<td>alamat</td>
	<td><input type="text" name="e"></td>
	</tr>
	<tr>
	<td>agama</td>
	<td>
		<select name="f">
			<option>islam</option>
			<option>kristen</option>
			<option>hindu</option>
			<option>budha</option>
			<option>konghuchu</option>
			

		</select>
	</td>
	</tr>
	<tr>
	<td>golongan darah</td>
	<td>
		<select name="g">
			<option>A</option>
			<option>B</option>
			<option>AB</option>
			<option>O</option>
			

		</select>
	</td>
	</tr>
<tr>
	<td>tanggal lahir</td>
	<td><input type="date" name="h"></td>
	</tr>
	<tr>
	<td>jenis kelamin</td>
	<td>
		<select name="i">
			<option>laki-laki</option>
			<option>perempun</option>
			<option>tidak memilih</option>
			

		</select>
	</td>
	</tr>
	<tr>
	<td>waktu daftar</td>
	<td><input type="datetime-local" name="j"></td>
	</tr>
<tr><td></td>
<td><button type="submit" name="kirim">tambah</button></td></tr>
</table>
</form>
<div class="y"> <p>Copyright By  @Rifki Arjundi</p> </div>

</body>
</html>