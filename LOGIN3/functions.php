<!-- tujuan dibuat agar membuat file khusus koneksi jadi tinggal manggil aja -->
<?php 
//Connecting to database.
//localhost dulu,terus nama username, password, nama database
//dimasukkan ke variabel agar mudah untuk dikelola
$conn = mysqli_connect("localhost","root","","login2");

//membuat fungsi untuk query agar sederhana
function query($query) {
	//fungsi global agar ngasih conn yang diatas itu sama dengan conn yang dibawah.
	global $conn;
	$result = mysqli_query($conn,$query);
	//membuat wadah di dalam lemari
	 $rows =[];
	//memasukkan baju kedalam kotak sehingga tidak perlu membawa lemari
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;

};

function tambahdatauser($data){
		global $conn;
		//Koneksi ke database
		$conn = mysqli_connect("localhost","root","","login2");

		//ambil data dari tiap elemen data form
		$noreg = htmlspecialchars($data["noreg"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);

		//query insert data
		$query = "INSERT INTO user VALUES
				 ('','$noreg','$nama','$email')";
	// mysqli affected row itu menampilkan berapa baris yang terpengaruh pada sql
	// jadi kalau terpengaruh akan ditulis 1 dan tidk ada pengaruh akan -1
	// tujuan agar mengetahui apakah data kita sukses diupload atau gagal.
	// var_dump(mysqli_affected_rows($conn));
	// implementasi menggunakan if
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function tambahdatakonten($data){
		global $conn;
		//Koneksi ke database
		$conn = mysqli_connect("localhost","root","","login2");

		//ambil data dari tiap elemen data form
		$judul = htmlspecialchars($data["judul"]);
		$kategorikonten = htmlspecialchars($data["kategorikonten"]);

		//query insert data
		$query = "INSERT INTO konten VALUES
				 ('','$judul','$kategorikonten')";
	// mysqli affected row itu menampilkan berapa baris yang terpengaruh pada sql
	// jadi kalau terpengaruh akan ditulis 1 dan tidk ada pengaruh akan -1
	// tujuan agar mengetahui apakah data kita sukses diupload atau gagal.
	// var_dump(mysqli_affected_rows($conn));
	// implementasi menggunakan if
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function tambahkategorikonten($data){
		global $conn;
		//Koneksi ke database
		$conn = mysqli_connect("localhost","root","","login2");

		//ambil data dari tiap elemen data form
		$kategorikonten = htmlspecialchars($data["kategorikonten"]);

		//query insert data
		$query = "INSERT INTO kategorikonten VALUES
				 ('','$kategorikonten')";
	// mysqli affected row itu menampilkan berapa baris yang terpengaruh pada sql
	// jadi kalau terpengaruh akan ditulis 1 dan tidk ada pengaruh akan -1
	// tujuan agar mengetahui apakah data kita sukses diupload atau gagal.
	// var_dump(mysqli_affected_rows($conn));
	// implementasi menggunakan if
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function tambahadmin($data){
		global $conn;
		//Koneksi ke database
		$conn = mysqli_connect("localhost","root","","login2");

		//ambil data dari tiap elemen data form
		$username = htmlspecialchars($data["username"]);
		$password = htmlspecialchars($data["password"]);

		//query insert data
		$query = "INSERT INTO admin VALUES
				 ('','$username','$password')";
	// mysqli affected row itu menampilkan berapa baris yang terpengaruh pada sql
	// jadi kalau terpengaruh akan ditulis 1 dan tidk ada pengaruh akan -1
	// tujuan agar mengetahui apakah data kita sukses diupload atau gagal.
	// var_dump(mysqli_affected_rows($conn));
	// implementasi menggunakan if
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function tambah($data){
		global $conn;
		//Koneksi ke database
		$conn = mysqli_connect("localhost","root","","login2");

		//ambil data dari tiap elemen data form
		$username = htmlspecialchars($data["username"]);
		$password = htmlspecialchars($data["password"]);

		//query insert data
		$query = "INSERT INTO admin VALUES
				 ('','$username','$password')";
	// mysqli affected row itu menampilkan berapa baris yang terpengaruh pada sql
	// jadi kalau terpengaruh akan ditulis 1 dan tidk ada pengaruh akan -1
	// tujuan agar mengetahui apakah data kita sukses diupload atau gagal.
	// var_dump(mysqli_affected_rows($conn));
	// implementasi menggunakan if
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}


function hapusdatauser($id){
		global $conn;
		//Koneksi ke database
		$conn = mysqli_connect("localhost","root","","login2");

		mysqli_query($conn, "DELETE FROM user WHERE id = $id");

		return mysqli_affected_rows($conn);
}

function hapusdatakonten($id){
		global $conn;
		//Koneksi ke database
		$conn = mysqli_connect("localhost","root","","login2");

		mysqli_query($conn, "DELETE FROM konten WHERE id = $id");

		return mysqli_affected_rows($conn);
}

function hapus($id){
		global $conn;
		//Koneksi ke database
		$conn = mysqli_connect("localhost","root","","phpdasar");
	

		mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

		return mysqli_affected_rows($conn);
}

function edit($data){
	global $conn;
		//Koneksi ke database
		$conn = mysqli_connect("localhost","root","","");

		//ambil data dari tiap elemen data form
		$id = $data["id"];
		$nim = htmlspecialchars($data["nim"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
		$prodi = htmlspecialchars($data["prodi"]);
		$gambarLama = htmlspecialchars($data["gambarLama"]);

		// cek apakah user pilih gambar baru atau tidak
		if ($_FILES['gambar']['error'] === 4) {
			$gambar = $gambarLama;
		}else{
			$gambar = upload();
		}
	
		//query insert data
		$query = "UPDATE mahasiswa SET 
				nim ='$nim',
				nama = '$nama',
				email = '$email',
				prodi = '$prodi',
				gambar = '$gambar'
				WHERE id = '$id'
					";
	// mysqli affected row itu menampilkan berapa baris yang terpengaruh pada sql
	// jadi kalau terpengaruh akan ditulis 1 dan tidk ada pengaruh akan -1
	// tujuan agar mengetahui apakah data kita sukses diupload atau gagal.
	// var_dump(mysqli_affected_rows($conn));
	// implementasi menggunakan if
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function editdatauser($data){
	global $conn;
		//Koneksi ke database
		$conn = mysqli_connect("localhost","root","","login2");

		//ambil data dari tiap elemen data form
		$id = $data["id"];
		$noreg = htmlspecialchars($data["noreg"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
		
		//query insert data
		$query = "UPDATE user SET 
				noreg ='$noreg',
				nama = '$nama',
				email = '$email'
				WHERE id = '$id'";
	// mysqli affected row itu menampilkan berapa baris yang terpengaruh pada sql
	// jadi kalau terpengaruh akan ditulis 1 dan tidk ada pengaruh akan -1
	// tujuan agar mengetahui apakah data kita sukses diupload atau gagal.
	// var_dump(mysqli_affected_rows($conn));
	// implementasi menggunakan if
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function editdatakonten($data){
	global $conn;
		//Koneksi ke database
		$conn = mysqli_connect("localhost","root","","login2");

		//ambil data dari tiap elemen data form
		$id = $data["id"];
		$judul = htmlspecialchars($data["judul"]);
		$kategorikonten = htmlspecialchars($data["kategorikonten"]);
		
		//query insert data
		$query = "UPDATE konten SET 
				judul ='$judul',
				kategorikonten = '$kategorikonten'
				WHERE id = '$id'";
	// mysqli affected row itu menampilkan berapa baris yang terpengaruh pada sql
	// jadi kalau terpengaruh akan ditulis 1 dan tidk ada pengaruh akan -1
	// tujuan agar mengetahui apakah data kita sukses diupload atau gagal.
	// var_dump(mysqli_affected_rows($conn));
	// implementasi menggunakan if
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function editkategorikonten($data){
	global $conn;
		//Koneksi ke database
		$conn = mysqli_connect("localhost","root","","login2");

		//ambil data dari tiap elemen data form
		$id = $data["id"];
		$kategorikonten = htmlspecialchars($data["kategorikonten"]);
		
		//query insert data
		$query = "UPDATE kategorikonten SET 
				kategorikonten = '$kategorikonten'
				WHERE id = '$id'";
	// mysqli affected row itu menampilkan berapa baris yang terpengaruh pada sql
	// jadi kalau terpengaruh akan ditulis 1 dan tidk ada pengaruh akan -1
	// tujuan agar mengetahui apakah data kita sukses diupload atau gagal.
	// var_dump(mysqli_affected_rows($conn));
	// implementasi menggunakan if
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query = "SELECT * FROM mahasiswa WHERE 
			  nama LIKE '%$keyword%' OR
			  nim LIKE '%$keyword%' OR
			  email LIKE '%$keyword%' OR
			  prodi LIKE '%$keyword%'

			  ";

			 return query($query);
}

function registrasi($data){
	global $conn;

	$username = strtolower(stripcslashes($data['username']));
	//fungsi ini memungkinan user menggunakan tanda kutip
	$password = mysqli_real_escape_string($conn, $data['password']);
	$password2 = mysqli_real_escape_string($conn, $data['password2']);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn,"SELECT username FROM user WHERE username= '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "
			<script>
			alert('Username sudah tersedia');
			</script>";
		return false;
	}

	if ($password !== $password2) {
		echo "
			<script>
			alert('Konfirmasi Password tidak sesuai');
			</script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);
	// tambahkan userbaru ke database
	mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password')");

	return mysqli_affected_rows($conn);
}

 ?>
