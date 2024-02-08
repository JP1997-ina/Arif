<?php 
require 'functions.php';

$id = $_GET['id'];

if (hapuskategorikonten($id)>0) {
		//menampilkan alert dan apabila ketika menekan ok akan kembali ke index.php
			echo "
				<script>
				alert('data berhasil dihapus!');
				document.location.href = 'kategorikonten.php';
				</script>	
			";

		}else{
			echo "<script>
				alert('data gagal dihapus!');
				document.location.href = 'kategorikonten.php';
				</script>	
			";
		}


 ?>