<?php 
require 'functions.php';

$user = query("SELECT * FROM user");

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data User</title>
</head>
<body>


<h1>Data User</h1>

<a href="tambahdatauser.php">Tambah user</a>

<table border="1" cellpadding="10" cellspacing="0">
	
	<tr>
<!-- 		th agar fontnya bold -->    
		<th>No.</th>		
		<th>Aksi</th>
		<th>Nomor Registrasi</th>
		<th>Nama</th>
		<th>Email</th>
	</tr>

	<!-- Membuat nomor jadi urut terus tambahkan increment setelah perulangan -->
	<?php $i=1 ; ?>
	<!-- Perulangan untuk memanggil data  -->
	<?php foreach ($user as $u) { ?>
	<tr> 
		<td><?php echo $i;?></td>
		<td>
			<a href="editdatauser.php?id=<?php echo $u["id"]; ?>">EDIT</a> |
			<a href="hapusdatauser.php?id=<?php echo $u["id"]; ?>" onclick="return confirm('Ingin menghapus data tersebut?');">DELETE</a>
		</td>
<!-- 		memanggil database yang digunakan -->
		<td><?php echo $u["noreg"]; ?></td>
		<td><?php echo $u["nama"]; ?></td>
		<td><?php echo $u["email"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php }  ?>

</table>
<br>
<a href="halamanutama.php">Kembali</a>

</body>
</html>