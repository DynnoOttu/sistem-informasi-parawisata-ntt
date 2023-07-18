<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

<?php
// koneksi database
include '../konektor.php';

//Fungsi untuk mencegah inputan karakter yang tidak sesuai
include '../cekInput.php';
//Enkripsi
include '../enkripsivariabel.php';

// menangkap data id yang di kirim dari url
$id = buka(input($_GET['id']));
 
 
// menghapus data dari database
mysqli_query($konektor,"delete from tbl_kategoriobjekwisata where idkategori='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php?pesan=hapus");
 
?>