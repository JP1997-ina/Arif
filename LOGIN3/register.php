<?php 
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
	if (isset($_POST["submit"])) {
		// cek apakah data berhasil ditambahkan atau tidak
		if (tambah($_POST)>0) {
			//menampilkan alert dan apabila ketika menekan ok akan kembali ke index.php
			echo "
				<script>
				alert('register berhasil ditambahkan!');
				document.location.href = 'login.php';

				</script>	
			";
		}else{
			echo "<script>
				alert('register gagal ditambahkan!');
				document.location.href = 'login.php';
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
	<title>Register</title>
</head>
<body>
<h1>Register</h1>

<!-- enctype untuk upload foto -->
	<form action="" method="post" >
		<ul>
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username"
				required>
			</li>
			<li>
				<label for="password">Password: </label>
				<input type="text" name="password" id="password"required>
			</li>
				<button type="text" name="submit">Tambah</button>
				<a href="login.php">Kembali</a>
		</ul>


	</form>

</body>
</html>