<?php 
require '../pungsi.php';
if (isset($_POST['kirim'])) {
	if (tambah2($_POST)>0) {
				echo "<script> alert('data berhasil ditambah'); 
		document.location.href='daftar.php';
		</script>
		";
	}
	else{
				echo "<script> alert('data gagal ditambah'); 
		document.location.href='daftar.php';
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
	<td>nomor ruangan</td>
	<td><input type="text"  autofocus  name="a"></td>
	</tr>
	<tr>
	<td>norm</td>
	<td><input type="text" name="b"></td>
	</tr>
	<tr>
	<td>waktu masuk</td>
	<td><input type="datetime-local" name="c"></td>
	</tr>
	<tr>
	<td>waktu keluar</td>
	<td><input type="datetime-local" name="d"></td>
	</tr>
<tr><td></td>
<td><button type="submit" name="kirim">tambah</button></td></tr>
</table>
</form>

<div class="y"> <p>Copyright By  @Rifki Arjundi</p> </div>
</body>
</html>