<?php
// koneksi database
include 'superadmin/konektor.php';

//Fungsi untuk mencegah inputan karakter yang tidak sesuai
include 'superadmin/cekInput.php';
include 'superadmin/enkripsivariabel.php';

// menangkap data yang di kirim dari form
$idtestimoni = input($_POST['idtestimoni']);
$deskripsi = input($_POST['deskripsi']);
$idobjekwisata = kunci($_POST['idobjekwisata']);
 
// update data ke database
mysqli_query($konektor,"UPDATE tbl_testimoni set deskripsi='$deskripsi' where idtestimoni='$idtestimoni'");
 
// mengalihkan halaman kembali ke index.php
header("location:displayObjek.php?pesan=ubahtestimoni&idobjekwisata=$idobjekwisata");
?>