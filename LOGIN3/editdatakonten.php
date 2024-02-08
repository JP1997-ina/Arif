<?php 	
require 'functions.php';


$id = $_GET['id'];


$queryedit = query("SELECT * FROM kategorikonten WHERE id=$id")[0];

	if (isset($_POST['submit'])) {
				// cek apakah data berhasil ditambahkan atau tidak
		if (editkategorikonten($_POST)>0) {
			//menampilkan alert dan apabila ketika menekan ok akan kembali ke index.php
			echo "
				<script>
				alert('data konten berhasil diedit!');
				document.location.href = 'kategorikonten.php';

				</script>	
			";
		}else{
			echo "<script>
				alert('data konten gagal diedit');
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
	<title>Edit Data User</title>
</head>
<body>

<h1>Edit Kategori Konten</h1>

<form action="" method="post">
	
	<ul>
		<input type="hidden" name="id" value="<?php echo $queryedit["id"] ?>">
		<li>
			<label for="kategorikonten">Kategori Konten : </label>
			<input type="text" name="kategorikonten" id="kategorikonten" value="<?php echo $queryedit["kategorikonten"] ?>" >
		</li>
		<li>
			<button name="submit" type="text">Edit Kategori Konten</button>
			<a href="kategorikonten.php">Kembali </a>
		</li>
	</ul>


</form>

</body>
</html>