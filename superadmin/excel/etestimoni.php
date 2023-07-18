<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=LaporanTestimoni.xls");
?>

LAPORAN DATA TESTIMONI<BR />
laporan seluruh
<hr />
<?php // koneksi database
include '../konektor.php';
?>

<table width="100%" border="1" cellspacing="0" cellpadding="0">
	<tr bgcolor="#FFFFCC">
		<td>No</td>
        <th>Tanggal</th>
        <th>Nama Wisatawan</th>
        <th>Objek</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Status</th>
	</tr>
	<?php
	$no = 1;
	$data = mysqli_query($konektor,"SELECT tbl_testimoni.idtestimoni, tbl_testimoni.idwisatawan, tbl_testimoni.idobjekwisata, tbl_testimoni.status, tbl_testimoni.tanggal, tbl_wisatawan.namawisatawan, tbl_objekwisata.nama,tbl_testimoni.judul,tbl_testimoni.deskripsi, if (tbl_testimoni.status = '1','publish', 'tunda') AS publish FROM `tbl_testimoni`,tbl_wisatawan,tbl_objekwisata WHERE tbl_testimoni.idwisatawan = tbl_wisatawan.idwisatawan AND tbl_testimoni.idobjekwisata = tbl_objekwisata.idobjekwisata ");//Mengambil data dari tabel
	while ($d = mysqli_fetch_array($data)) {
	?>
		<tr>
			<td><?= $no++; ?></td>
			<<td><?php echo $d['tanggal']; ?></td>
            <td><?php echo $d['namawisatawan']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['judul']; ?></td>
            <td><?php echo $d['deskripsi']; ?></td>
            <td><?php echo $d['publish']; ?></td>
		</tr>
	<?php } ?>
</table>
<hr />
<small>Dicetak Tanggal <?php echo ucwords(strtolower(date('j F Y, g:i a'))) ?>, Melalui: <strong>iClass</strong> www.namadomain.com</small>