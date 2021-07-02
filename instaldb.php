<?php 
$saya = new mysqli ("localhost", "root", "", "",);
$sql = "CREATE DATABASE layanangizi";
$q = $saya->query ($sql);
if ($q) {
	echo "database berhasil dibuat";
}

else {
	echo "database gagal dibuat";
}



?>
