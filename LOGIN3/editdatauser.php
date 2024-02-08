<?php 	
require 'functions.php';


$id = $_GET['id'];


$queryedit = query("SELECT * FROM user WHERE id=$id")[0];

	if (isset($_POST['submit'])) {
				// cek apakah data berhasil ditambahkan atau tidak
		if (editdatauser($_POST)>0) {
			//menampilkan alert dan apabila ketika menekan ok akan kembali ke index.php
			echo "
				<script>
				alert('user berhasil diedit!');
				document.location.href = 'datauser.php';

				</script>	
			";
		}else{
			echo "<script>
				alert('user gagal diedit');
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
	<title>Edit Data User</title>
</head>
<body>

<h1>Edit data user</h1>

<form action="" method="post">
	
	<ul>
		<input type="hidden" name="id" value="<?php echo $queryedit["id"] ?>">
		<li>
			<label for="noreg">Nomor Registrasi : </label>
			<input type="text" name="noreg" id="noreg" value="<?php echo $queryedit["noreg"] ?>">
		</li>
		<li>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama" value="<?php echo $queryedit["nama"] ?>" >
		</li>
		<li>
			<label for="email">Email : </label>
			<input type="text" name="email" id="email" value="<?php echo $queryedit["email"] ?>">
		</li>
		<li>
			<button name="submit" type="text">Edit Data User</button>
			<a href="halamanutama.php">Kembali </a>
		</li>
	</ul>


</form>

</body>
</html>