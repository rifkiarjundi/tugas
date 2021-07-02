<?php 
require 'pungsi.php';
if (isset($_GET['i'])) {


	$b=$_GET['i'];
	if (hapus1($b)>0) {
	echo "<script>
	alert('data berhasil dihapus');
	document.location.href='gizi/daftar.php'
	</script>";
}


else{
		echo "<script>
	alert('data gagal dihapus');
	document.location.href='gizi/daftar.php'
	</script>";
}
	}

if (isset($_GET['b'])) {


	$b=$_GET['b'];
	if (hapus($b)>0) {
	echo "data berhasil dihapus";
}


else{
	echo "data gagal dihapus";
}
	}
	
	if (isset($_GET['d'])) {


	$b=$_GET['d'];
	if (hapus2($b)>0) { 
		echo "<script>
	alert('data berhasil dihapus');
	document.location.href='ruangan/daftar.php'
	</script>";
	
}


else{
	echo "<script>
	alert('data gagal dihapus');
	document.location.href='ruangan/daftar.php'
	</script>";
}
	}

 ?>