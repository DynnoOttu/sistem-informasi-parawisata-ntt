<?php
//Tidak support bootstrap
//Pada halaman html ini tidak boleh menggunakan CDN atau framework
//Membuat laporan pdf bagian atas
$nama_dokumen='Laporan Testimoni Menurut Objek'; //Beri nama file PDF hasil.
include("../mpdf60/mpdf.php"); //Lokasi file mpdf.php
$mpdf = new mPDF('utf-8', 'A4'); // Membuat sebuah file pdf
$mpdf->SetHeader('');
//$mpdf->setFooter('{PAGENO}');// Memberi nomor halaman
ob_start();
?>
LAPORAN TESTIMONI<br/>
Menurut Objek Wisata
<?php
include '../konektor.php';
$idobjekwisata = $_POST['idobjekwisata'];
$data1 = mysqli_query($konektor,"select * from tbl_objekwisata where idobjekwisata like '$idobjekwisata'");
if (mysqli_num_rows($data1) > 0){
    while ($d1 = mysqli_fetch_array($data1)) {
    echo $d1['nama'];
    }
}
?>

<hr/>

<table width="100%" border="1" cellspacing="0" cellpadding="0">
	<tr bgcolor="#FFFFCC">
		<td>No</td>
        <th>Tanggal</th>
        <th>Nama Wisatawan</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Status</th>
	</tr>
	<?php
    $no = 1;
    $idobjekwisata = $_POST ['idobjekwisata']; //mengambil Velue dari url parameter
	$data = mysqli_query($konektor,"SELECT tbl_testimoni.idtestimoni, tbl_testimoni.idwisatawan, tbl_testimoni.idobjekwisata, tbl_testimoni.status, tbl_testimoni.tanggal, tbl_wisatawan.namawisatawan, tbl_objekwisata.nama,tbl_testimoni.judul,tbl_testimoni.deskripsi, if (tbl_testimoni.status = '1','publish', 'tunda') AS publish FROM `tbl_testimoni`,tbl_wisatawan,tbl_objekwisata WHERE tbl_objekwisata.idobjekwisata = $idobjekwisata AND tbl_testimoni.idwisatawan = tbl_wisatawan.idwisatawan AND tbl_testimoni.idobjekwisata = tbl_objekwisata.idobjekwisata ");//Mengambil data dari tabel
	while ($d = mysqli_fetch_array($data)) {
	?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?php echo $d['tanggal']; ?></td>
            <td><?php echo $d['namawisatawan']; ?></td>
            <td><?php echo $d['judul']; ?></td>
            <td><?php echo $d['deskripsi']; ?></td>
            <td><?php echo $d['publish']; ?></td>
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