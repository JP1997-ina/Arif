<?php 
require 'functions.php';

if (isset($_POST['login'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password']; 

	//Cek username
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username'");

	//cek apakah ada username yang sesuai
	if (mysqli_num_rows($result) === 1) {
		//cek password
	//	$row = mysqli_fetch_assoc($result);
		//password verify mengembalikan password yang di enksprisi tadi ke string
		/*if (password_verify($password, $row['password'])) {
			//set session
			$_SESSION['login'] = true;*/
			//cek remember me
			/*if (isset($_POST['remember'])) {
				//Buat cookie agar aman jadi dienkripsi
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);

				}*/	

			header('Location: halamanutama.php');
			exit;
		//}	
	}

	$error = true;
}

 
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belajar CRUD</title>
</head>
<body>


<h1>Belajar</h1>

<!-- logika kalau pesan error -->
<?php if (isset($error)) : ?>
 	<p style="color: red; font-style: italic;">
	Username / Password salah ! 		
 	</p>

<?php endif; ?>


<form action="" method="post">
	
	<ul>
		<li>
			<label for="username">Username : </label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password : </label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">Remember</label>
		</li>
		<li>
			<button type="submit" name="login">Login ! </button>
			<button type="submit" name="Register" formaction="register.php">Register ! </button>
		</li>
	</ul>

 
</form>
</body>
</html>