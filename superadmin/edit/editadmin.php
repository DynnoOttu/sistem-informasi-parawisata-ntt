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
$idadmin = input($_POST['idadmin']);
$nama = input($_POST['nama']);
$alamat = input($_POST['alamat']);
$telepon = input($_POST['telepon']);
$email = input($_POST['email']);
$username = input($_POST['username']);
$sandi = input($_POST['sandi']);
 
// update data ke database
mysqli_query($konektor,"update tbl_admin set nama='$nama', alamat='$alamat', telepon='$telepon', email='$email', username='$username', sandi='$sandi' where idadmin='$idadmin'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php?pesan=ubah");
?>