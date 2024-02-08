<?php 	
require 'functions.php';


	if (isset($_POST['submit'])) {
				// cek apakah data berhasil ditambahkan atau tidak
		if (tambahkategorikonten($_POST)>0) {
			//menampilkan alert dan apabila ketika menekan ok akan kembali ke index.php
			echo "
				<script>
				alert('konten berhasil ditambahkan!');
				document.location.href = 'kategorikonten.php';

				</script>	
			";
		}else{
			echo "<script>
				alert('konten gagal ditambahkan!');
				document.location.href = 'kategorikonten.php';
				</script>	
			";
		}
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Konten</title>
</head>
<body>

<h1>Tambah data user</h1>

<form action="" method="post">
	
	<ul>
		<li>
			<label for="kategorikonten">Kategori Konten : </label>
			<input type="text" name="kategorikonten" id="kategorikonten" placeholder=" Masukkan kategori konten">
		</li>
		<li>
			<button name="submit" type="text">Tambah Kategori Konten</button>
			<a href="kategorikonten.php">Kembali </a>

		</li>

	</ul>


</form>

</body>
</html>