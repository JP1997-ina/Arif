<?php 	
require 'functions.php';


$id = $_GET['id'];


$queryedit = query("SELECT * FROM konten WHERE id=$id")[0];

	if (isset($_POST['submit'])) {
				// cek apakah data berhasil ditambahkan atau tidak
		if (editdatakonten($_POST)>0) {
			//menampilkan alert dan apabila ketika menekan ok akan kembali ke index.php
			echo "
				<script>
				alert('data konten berhasil diedit!');
				document.location.href = 'datakonten.php';

				</script>	
			";
		}else{
			echo "<script>
				alert('data konten gagal diedit');
				document.location.href = 'datakonten.php';
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
	<title>Edit Data User</title>
</head>
<body>

<h1>Edit data Konten</h1>

<form action="" method="post">
	
	<ul>
		<input type="hidden" name="id" value="<?php echo $queryedit["id"] ?>">
		<li>
			<label for="judul">Judul :  </label>
			<input type="text" name="judul" id="judul" value="<?php echo $queryedit["judul"] ?>">
		</li>
		<li>
			<label for="kategorikonten">Kategori Konten : </label>
			<input type="text" name="kategorikonten" id="kategorikonten" value="<?php echo $queryedit["kategorikonten"] ?>" >
		</li>
		<li>
			<button name="submit" type="text">Edit Data Konten</button>
			<a href="datakonten.php">Kembali </a>
		</li>
	</ul>


</form>

</body>
</html>