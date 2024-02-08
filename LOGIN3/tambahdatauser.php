<?php 	
require 'functions.php';


	if (isset($_POST['submit'])) {
				// cek apakah data berhasil ditambahkan atau tidak
		if (tambahdatauser($_POST)>0) {
			//menampilkan alert dan apabila ketika menekan ok akan kembali ke index.php
			echo "
				<script>
				alert('user berhasil ditambahkan!');
				document.location.href = 'datauser.php';

				</script>	
			";
		}else{
			echo "<script>
				alert('user gagal ditambahkan!');
				document.location.href = 'datauser.php';
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
	<title>Tambah Data User</title>
</head>
<body>

<h1>Tambah data user</h1>

<form action="" method="post">
	
	<ul>
		<li>
			<label for="noreg">Nomor Registrasi : </label>
			<input type="text" name="noreg" id="noreg" placeholder="Nomor Registrasi">
		</li>
		<li>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama" placeholder="Nama">
		</li>
				<li>
			<label for="email">Email : </label>
			<input type="text" name="email" id="email" placeholder="email">
		</li>
		<li>
			<button name="submit" type="text">Tambah Data User</button>
			<a href="datauser.php">Kembali </a>

		</li>

	</ul>


</form>

</body>
</html>