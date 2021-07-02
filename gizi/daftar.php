<?php 
require '../pungsi.php';
$u= mysqli_query($saya, "SELECT * FROM gizi");
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar </title>
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
 	<button><a href="tambah.php">tambah</a></button>||<button><a href="../pasien/daftar.php">daftar pasien</a></button>||<button><a href="../ruangan/daftar.php">layanan ruangan</a></button>

 </div></center>
<table border="1" width="100%" cellpadding="10" cellspacing="0">
	<tr>
		<th>no</th>
		<th>aksi</th>
		<th>idlayanangizi</th>
		<th>norm</th>
		<th>waktulayanan</th>
		<th>diet</th>
	</tr>
	<?php $i=1; ?>
	<?php while ($row=mysqli_fetch_assoc($u)): {
	} ?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><a href="../hapus.php?i=<?php echo $row ['idlayanan']; ?>">hapus</a>||<a href="edit.php?i=<?php echo $row ['idlayanan']; ?>">edit</a></td >
		<td><?php echo $row ['idlayanan']; ?></td>
		<td><?php echo $row ['norm']; ?></td>
		<td><?php echo $row ['waktulayanan']; ?></td>
		<td><?php echo $row ['diet']; ?></td>
	</tr>
	<?php $i++; ?>
<?php endwhile; ?>
</table>



<div class="y"> <p>Copyright By  @Rifki Arjundi</p> </div>
 </body>
 </html>