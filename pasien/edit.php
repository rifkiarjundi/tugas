<?php 
require '../pungsi.php';

if (isset($_GET['b'])) {
$m=$_GET['b'];
$ambil=mysqli_query($saya, "SELECT * FROM pasien WHERE noidpasien='$m'");
}

if (isset($_POST['kirim'])) {
	if (ubah3($_POST)>0) {
		echo "<script> alert('data berhasil dirubah'); 
		document.location.href='daftar.php';
		</script>
		";


	}
	else{
		echo "<script> alert('gagal');
		document.location.href='edit.php';
		</script>
		";
	}
}
 ?>


 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
<table>
	<?php while ($row=mysqli_fetch_assoc($ambil)): {
		
	} ?>
	<tr>
	<td>norm</td>
	<td><input type="text" name="a"  autofocus required   value="<?php echo $row ['norm']; ?>"></td>
	</tr>
	<tr>
	<td>no id pasien</td>
	<td><input type="text" name="b"   required    value="<?php echo $row ['noidpasien']; ?>"></td>
	</tr>
	<tr>
	<td>jenis id</td>
	<td>
		<select name="c"    required     value="<?php echo $row ['jenisid']; ?>">
			<option>KTP</option>
			<option>SIM</option>
			<option>PASPORT</option>
			<option>LAINYA</option>
			

		</select>
	</td>
	</tr>
	<tr>
	<td>namapasien</td>
	<td><input type="text" name="d"       required    value="<?php echo $row ['namapasien']; ?>"></td>
	</tr>
	<tr>
	<td>alamat</td>
	<td><input type="text" name="e"   required    value="<?php echo $row ['alamat']; ?>"></td>
	</tr>
	<tr>
	<td>agama</td>
	<td>
		<select name="f"   required    value="<?php echo $row ['agama']; ?>">
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
		<select name="g"   required   value="<?php echo $row ['golongandarah']; ?>">
			<option>A</option>
			<option>B</option>
			<option>AB</option>
			<option>O</option>
			

		</select>
	</td>
	</tr>
<tr>
	<td>tanggal lahir</td>
	<td><input type="date" name="h"   required   value="<?php echo $row ['tanggallahir']; ?>"></td>
	</tr>
	<tr>
	<td>jenis kelamin</td>
	<td>
		<select name="i"     required   value="<?php echo $row ['jeniskelamin']; ?>">
			<option>laki-laki</option>
			<option>perempun</option>
			<option>tidak memilih</option>
			

		</select>
	</td>
	</tr>
	<tr>
	<td>waktu daftar</td>
	<td><input type="datetime-local" name="j"  required  value="<?php echo $row ['waktudaftar']; ?>"></td>
	</tr>
<tr><td></td>
<td><button type="submit" name="kirim">simpan</button></td></tr>

<?php endwhile; ?>
</table>
</form>
</body>
</html>