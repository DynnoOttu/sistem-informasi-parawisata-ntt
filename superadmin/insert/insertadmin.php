<!-- cek apakah sudah login -->
	<!-- Cara 1 Jika halaman login terpisah dengan halaman index -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

<?php 
//Script ini disimpan dengan nama file sendiri. Misalkan insertAdmin.php
// koneksi database
include '../konektor.php';

//Fungsi untuk mencegah inputan karakter yang tidak sesuai
include '../cekInput.php';
 
// menangkap data yang di kirim dari form
$nama = input($_POST['nama']);
$alamat = input($_POST['alamat']);
$telepon = input($_POST['telepon']);
$email = input($_POST['email']);
$username = input($_POST['username']);
$sandi = input($_POST['sandi']);

//Mencari data di dalam database sesuai dengan inputan yang dimasukan
$data = mysqli_query($konektor,"select * from tbl_admin where username like '$username'");
if (mysqli_num_rows($data)>0)
	//cara kedua dengan mengirimkan alert
{   //Data ditemukan
    while ($d = mysqli_fetch_array($data)) {
	//cara pertama kembali ke halaman index untuk mengirim pesan
	header("location:../index.php?pesan=duplikat");
        /* echo "<script>
        alert('Data username $d[username] sudah ada. Silahkan ulangi dengan memasukan data yang lainnya');
        history.go(-1)  //scrip kembali ke 1 halaman sebelumnya
		</script>";*/}}

        //Cara 2 kembali kehalaman index dengan mengirimkan pesan
        //header("location:../index.php?pesan=duplikat");

else{
	// menginput data ke database
	mysqli_query($konektor,"insert into tbl_admin values('','$nama','$alamat','$telepon','$email','$username','$sandi')");
	// mengalihkan halaman kembali ke index.php
	header("location:../index.php?pesan=tersimpan");
}


?>