<?php 
require '../pungsi.php';

if (isset($_GET['i'])) {
$m=$_GET['i'];
$ambil=mysqli_query($saya, "SELECT*FROM gizi WHERE idlayanan='$m'");
}

if (isset($_POST['kirim'])) {
	if (ubah($_POST)>0) {
		echo "<script> alert('data berhasil dirubah'); 
		document.location.href='daftar.php';
		</script>
		";
	}
	else{
		echo "<script> alert('gagal');
		d0cument.location.href='edit.php';
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
	<td><input type="hidden" name="a" value="<?php echo $row ['idlayanan']; ?>"></td>
	</tr>
	<tr>
	<td>norm</td>
	<td><input type="text" name="b" value="<?php echo $row ['norm']; ?>"></td>
	</tr>
	<tr>
	<td>waktulayanan</td>
	<td><input type="datetime-local" name="c" value="<?php echo $row ['waktulayanan']; ?>"></td>
	</tr>
	<tr>
	<td>diet</td>
	<td><input type="text" name="d" value="<?php echo $row ['diet']; ?>"></td>
	</tr>
	<tr><td></td>
<td><button type="submit" name="kirim">tambah</button></td></tr>

<?php endwhile; ?>
</table>
</form>
</body>
</html>