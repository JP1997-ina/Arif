<?php 
require 'functions.php';
$konten = query("SELECT * FROM konten");

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Konten</title>
</head>
<body>

<h1>Data Konten</h1>

<a href="tambahdatakonten.php">Tambah Data konten</a>

<table border="1" cellpadding="10" cellspacing="0">
	
	<tr>
<!-- 		th agar fontnya bold -->    
		<th>No.</th>		
		<th>Aksi</th>
		<th>Judul</th>
		<th>Kategori Konten</th>
	</tr>

	<!-- Membuat nomor jadi urut terus tambahkan increment setelah perulangan -->
	<?php $i=1 ; ?>
	<!-- Perulangan untuk memanggil data  -->
	<?php foreach ($konten as $ktn) { ?>
	<tr> 
		<td><?php echo $i;?></td>
		<td>
			<a href="editdatakonten.php?id=<?php echo $ktn["id"]; ?>">EDIT</a> |
			<a href="hapusdatakonten.php?id=<?php echo $ktn["id"]; ?>" onclick="return confirm('Ingin menghapus data tersebut?');">DELETE</a>
		</td>
<!-- 		memanggil database yang digunakan -->
		<td><?php echo $ktn["judul"]; ?></td>
		<td><?php echo $ktn["kategorikonten"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php }  ?>

</table>
<br>
<a href="halamanutama.php">Kembali </a>


</body>
</html>