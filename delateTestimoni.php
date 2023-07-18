<?php
// koneksi database
include 'superadmin/konektor.php';

//Enkripsi
include 'superadmin/enkripsiVariabel.php';

// menangkap data id yang di kirim dari url
$idtestimoni = buka($_GET['idtestimoni']);
$idobjekwisata = buka($_GET['idobjekwisata']);
$ido = kunci($idobjekwisata);
 
// menghapus data dari database
mysqli_query($konektor,"DELETE from tbl_testimoni where idtestimoni='$idtestimoni'");
 
// mengalihkan halaman kembali ke index.php
header("location:displayObjek.php?pesan=hapustestimoni&idobjekwisata=$ido");
?>