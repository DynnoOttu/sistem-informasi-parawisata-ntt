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

// menangkap data yang di kirim dari form
$idobjekwisata = input($_POST['idobjekwisata']);
$idkategori = input($_POST['idkategori']);
$nama = input($_POST['nama']);
$deskripsi = input($_POST['deskripsi']);
$alamat = input($_POST['alamat']);
$status = input($_POST['status']);
 
// update data ke database
mysqli_query($konektor,"update tbl_objekwisata set idkategori='$idkategori', nama='$nama', deskripsi='$deskripsi', alamat='$alamat', status='$status' where idobjekwisata='$idobjekwisata'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php?pesan=ubah");
?>