<?php 
require '../pungsi.php';
$u= mysqli_query($saya, "SELECT * FROM pasien");
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar pasien</title>
 	<style type="text/css">
 		*{
 			padding: 0;
 			margin: 0;
 		}

button{
	text-align: center;
}
 		.o{

 			background-color: green;
 			color: white;
 		

 		}
a{
	text-decoration: none;
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

 	<center>
 <div class="o">
 	<button><a href="tambah.php">tambah</a></button>||<button><a href="../gizi/daftar.php">layanan gizi</a></button>||<button><a href="../ruangan/daftar.php">layanan ruangan</a></button>

 </div></center>
<table border="1" width="100%" cellpadding="10" cellspacing="0">
	<tr>
		<th>no</th>
		<th>aksi</th>
		<th>norm</th>
		<th>noidpasien</th>
		<th>jenisid</th>
		<th>nama pasien</th>
		<th>alamat</th>
		<th>agama</th>
		<th>golongan darah</th>
		<th>tanggal lahir</th>
		<th>jenis kelamin</th>
		<th>waktu daftar</th>
	</tr>
	<?php $i=1; ?>
	<?php while ($row=mysqli_fetch_assoc($u)): {
	} ?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><a href="../hapus.php?b=<?php echo $row ['noidpasien']; ?>">hapus</a>||<a href="edit.php?b=<?php echo $row ['noidpasien']; ?>">edit</a></td>
		<td><?php echo $row ['norm']; ?></td>
		<td><?php echo $row ['noidpasien']; ?></td>
		<td><?php echo $row ['jenisid']; ?></td>
		<td><?php echo $row ['namapasien']; ?></td>
		<td><?php echo $row ['alamat']; ?></td>
		<td><?php echo $row ['agama']; ?></td>
		<td><?php echo $row ['golongandarah']; ?></td>
		<td><?php echo $row ['tanggallahir']; ?></td>
		<td><?php echo $row ['jeniskelamin']; ?></td>
		<td><?php echo $row ['waktudaftar']; ?></td>
	</tr>
	<?php $i++; ?>
<?php endwhile; ?>
</table>



<div class="y"> <p>Copyright By  @Rifki Arjundi</p> </div>
 </body>
 </html>