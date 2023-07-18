<?php 
//Script ini disimpan dengan nama file sendiri. Misalkan insertAdmin.php
// koneksi database
include 'superadmin/konektor.php';

//Fungsi untuk mencegah inputan karakter yang tidak sesuai
include 'superadmin/cekInput.php';
 
// menangkap data yang di kirim dari form
$nama = input($_POST['namawisatawan']);
$telepon = input($_POST['telepon']);
$email = input($_POST['email']);
$sandi = input($_POST['sandi']);
$jenis_kelamin = input($_POST['jenis_kelamin']);



//Mencari data di dalam database sesuai dengan inputan yang dimasukan
$data = mysqli_query($konektor,"select * from tbl_wisatawan where telepon like '$telepon'");
if (mysqli_num_rows($data)>0)
{   //Data ditemukan
    while ($d = mysqli_fetch_array($data)) {
        header("location:index.php?pesan=Duplikat"); }}

else{
    // menginput data ke database
mysqli_query($konektor,"insert into tbl_wisatawan values('','$nama','$telepon','$email','$sandi','$jenis_kelamin')");

// mengalihkan halaman kembali ke index.php
header("location:index.php?pesan=DataBerhasilTersimpan");
}

?>