<?php 
require 'pungsi.php';
$sql1 = "CREATE TABLE `layanangizi`.`pasien`(
`norm` varchar(10),
`noidpasien` varchar(20),
`jenisid` varchar(40),
`namapasien` varchar(40),
`alamat` varchar(50),
`agama` varchar(15),
`golongandarah` varchar(10),
`tanggallahir` varchar(15),
`jeniskelamin` varchar (20),
`waktudaftar` varchar(20),
PRIMARY KEY(`norm`)) ENGINE = InnoDB;";


$sql2= $saya->query($sql1);

if ($sql2) {
	
	echo "tabel berhasil dibuat";
	echo "<br>";
}
else{

	echo"tabel gagal dibuat";
	echo "<br>";
}


$sql3 = "CREATE TABLE `layanangizi`.`ruangan`(
`nomorruangan` varchar(11),
`norm` varchar(10),
`waktumasuk` varchar(20),
`waktukeluar` varchar (20),
PRIMARY KEY(`norm`)) ENGINE = InnoDB;";

$sql4= $saya->query($sql3);

if ($sql4) {
	
	echo "tabel berhasil dibuat";
	echo "<br>";
}
else{

	echo"tabel gagal dibuat";
	echo "<br>";
}

$sql7 = "CREATE TABLE `layanangizi`.`gizi`(
`idlayanan` int(11) AUTO_INCREMENT,
`norm` varchar(10),
`waktulayanan` varchar(20),
`diet` varchar (20),
PRIMARY KEY(`idlayanan`)) ENGINE = InnoDB;";

$sql9= $saya->query($sql7);

if ($sql9) {
	
	echo "tabel berhasil dibuat";
	echo "<br>";
}
else{

	echo"tabel gagal dibuat";
	echo "<br>";
}


 ?>


