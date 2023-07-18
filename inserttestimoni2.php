<?php 
//Script ini disimpan dengan nama file sendiri. Misalkan insertAdmin.php
// koneksi database
include 'superadmin/konektor.php';

//Fungsi untuk mencegah inputan karakter yang tidak sesuai
include 'superadmin/cekInput.php';
include 'superadmin/enkripsivariabel.php';
 
// menangkap data yang di kirim dari form
$tanggal = $_POST['tanggal'];
$idwisatawan = $_POST['idwisatawan'];
$idobjekwisata = $_POST['idobjekwisata'];
$idobjek = kunci($idobjekwisata);
$judul= input($_POST['judul']);
$deskripsi = input($_POST['deskripsi']);

// menginput data ke database
mysqli_query($konektor, "INSERT into tbl_testimoni values('','$tanggal','$idwisatawan','$idobjekwisata','$judul','$deskripsi','0')");

// mengalihkan halaman kembali ke index.php
header("location:displayObjek.php?pesan=simpantestimoni&idobjekwisata=$idobjek");
?>