<?php 
$saya = new mysqli ("localhost", "root", "", "layanangizi");

 function tambah1()
 {
 	global $saya;
 	$a=$_POST['a'];
 	$b=$_POST['b'];
 	$c=$_POST['c'];
 	$d=$_POST['d'];
 $k="INSERT INTO gizi VALUES ('$a','$b','$c','$d');";

$l=$saya->query($k);
return mysqli_affected_rows($saya);
 	

 }
 function tambah2()
 {
 	global $saya;
 	$a=$_POST['a'];
 	$b=$_POST['b'];
 	$c=$_POST['c'];
 	$d=$_POST['d'];
 $k="INSERT INTO ruangan VALUES ('$a','$b','$c','$d');";

$l=$saya->query($k);
return mysqli_affected_rows($saya);
 	

 }
 function tambah()
 {
 	global $saya;
 	$a=$_POST['a'];
 	$b=$_POST['b'];
 	$c=$_POST['c'];
 	$d=$_POST['d'];
 	$e=$_POST['e'];
 	$f=$_POST['f'];
 	$g=$_POST['g'];
 	$h=$_POST['h'];
 	$i=$_POST['i'];
 	$j=$_POST['j'];
 $k="INSERT INTO pasien VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j');";

$l=$saya->query($k);
return mysqli_affected_rows($saya);
 	

 }
 function hapus1($b)
{
	 	global $saya;
	mysqli_query($saya,"DELETE FROM `gizi` WHERE idlayanan='$b'");
		return mysqli_affected_rows($saya);

}

function hapus($b)
{
	 	global $saya;
	mysqli_query($saya,"DELETE FROM pasien WHERE noidpasien='$b'");
		return mysqli_affected_rows($saya);

}
function hapus2($d)
{
	 	global $saya;
	mysqli_query($saya,"DELETE FROM ruangan WHERE nomorruangan='$d'");
		return mysqli_affected_rows($saya);

}
function ubah()
{
		global $saya;
		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		$d=$_POST['d'];

		$r="UPDATE gizi SET idlayanan='$a', norm='$b', waktulayanan='$c', diet='$d' WHERE idlayanan='$a'";
		$g=$saya->query($r);
		return mysqli_affected_rows($saya);
}
function ubah2()
{
		global $saya;
		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		$d=$_POST['d'];

		$r="UPDATE ruangan SET nomorruangan='$a', norm='$b', waktumasuk='$c', waktukeluar='$d'";
		$g=$saya->query($r);
		return mysqli_affected_rows($saya);
}
function ubah3()
{    
	global $saya;
 	$a=$_POST['a'];
 	$b=$_POST['b'];
 	$c=$_POST['c'];
 	$d=$_POST['d'];
 	$e=$_POST['e'];
 	$f=$_POST['f'];
 	$g=$_POST['g'];
 	$h=$_POST['h'];
 	$i=$_POST['i'];
 	$j=$_POST['j'];


		$r="UPDATE pasien SET norm='$a', noidpasien='$b', jenisid='$c',namapasien='$d', alamat='$e', agama='$f',golongandarah='$g', tanggallahir='$h', jeniskelamin='$i', waktudaftar='$j,' WHERE norm='$a'";
		$g=$saya->query($r);
		return mysqli_affected_rows($saya);
}



 ?>
