<?php
// koneksi database
include 'superadmin/konektor.php';

//Fungsi untuk mencegah inputan karakter yang tidak sesuai
include 'superadmin/cekInput.php';

// menangkap data yang di kirim dari form
$idwisatawan = input($_POST['idwisatawan']);
$namawisatawan = input($_POST['namawisatawan']);
$telepon = input($_POST['telepon']);
$email = input($_POST['email']);
$sandi = input($_POST['sandi']);
$jenis_kelamin = input($_POST['jenis_kelamin']);
 
// update data ke database
mysqli_query($konektor,"update tbl_wisatawan set namawisatawan='$namawisatawan', telepon='$telepon', email='$email', sandi='$sandi', jenis_kelamin='$jenis_kelamin' where idwisatawan='$idwisatawan'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php?pesan=UbahBerhasil");
?>