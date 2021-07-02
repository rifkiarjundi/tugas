<?php 
require '../pungsi.php';

if (isset($_GET['d'])) {
$m=$_GET['d'];
$ambil=mysqli_query($saya, "SELECT*FROM ruangan WHERE nomorruangan='$m'");
}

if (isset($_POST['kirim'])) {
	if (ubah2($_POST)>0) {
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
	<td>nomorruangan</td>
	<td><input type="text" name="a" value="<?php echo $row ['nomorruangan']; ?>"></td>
	</tr>
	<tr>
	<td>norm</td>
	<td><input type="text" name="b" value="<?php echo $row ['norm']; ?>"></td>
	</tr>
	<tr>
	<td>waktumasuk</td>
	<td><input type="datetime-local" name="c" value="<?php echo $row ['waktumasuk']; ?>"></td>
	</tr>
	<tr>
	<td>waktukeluar</td>
	<td><input type="datetime-local" name="d" value="<?php echo $row ['waktukeluar']; ?>"></td>
	</tr>
<tr><td></td>
<td><button type="submit" name="kirim">kirim</button></td></tr>

<?php endwhile; ?>
</table>
</form>
</body>
</html>