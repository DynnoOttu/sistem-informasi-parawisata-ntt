<?php
//Tidak support bootstrap
//Pada halaman html ini tidak boleh menggunakan CDN atau framework
//Membuat laporan pdf bagian atas
$nama_dokumen='Laporan Data Admin'; //Beri nama file PDF hasil.
include("../mpdf60/mpdf.php"); //Lokasi file mpdf.php
$mpdf=new mPDF('utf-8', 'A4'); // Membuat sebuah file pdf
$mpdf->SetHeader('');
//$mpdf->setFooter('{PAGENO}');// Memberi nomor halaman
ob_start();
?>

LAPORAN DATA ADMIN<BR />
laporan seluruh
<hr />
<?php // koneksi database
include '../konektor.php';
?>
KATEGORI OBJEK WISATA<BR />
Keterangan
<hr />
<?php // koneksi database
include '../konektor.php';
?>

<table width="100%" border="1" cellspacing="0" cellpadding="0">
	<tr bgcolor="#FFFFCC">
		<td>No</td>
		<td>Nama Kategori</td>
	</tr>
	<?php
	$no = 1;
	$data = mysqli_query($konektor, "select * from tbl_kategoriobjekwisata");//Mengambil data dari tabel
	while ($d = mysqli_fetch_array($data)) {
	?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?php echo $d['namakategori']; ?></td>
		</tr>
	<?php } ?>
</table>
<hr />
<small>Dicetak Tanggal <?php echo ucwords(strtolower(date('j F Y, g:i a'))) ?>, Melalui: <strong>iClass</strong> www.namadomain.com</small>
<?php
//Membuat laporan pdf bagian atas
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>