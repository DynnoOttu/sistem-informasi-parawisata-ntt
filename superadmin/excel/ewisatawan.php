<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=nama_fileLaporanWisatawan.xls");
?>

LAPORAN DATA WISATAWAN<BR />
laporan seluruh
<hr />
<?php // koneksi database
include '../konektor.php';
?>

<table width="100%" border="1" cellspacing="0" cellpadding="0">
	<tr bgcolor="#FFFFCC">
		<td>No</td>
		<td>Nama wisatawan</td>
		<td>Telepon </td>
		<td>Email</td>
		<td>Jenis Kelamin</td>
	</tr>
	<?php
	$no = 1;
	$data = mysqli_query($konektor, "select * from tbl_wisatawan");//Mengambil data dari tabel
	while ($d = mysqli_fetch_array($data)) {
	?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?php echo $d['namawisatawan']; ?></td>
			<td><?php echo $d['telepon']; ?></td>
			<td><?php echo $d['email']; ?></td>
			<td><?php echo $d['jenis_kelamin']; ?></td>
		</tr>
	<?php } ?>
</table>
<hr />
<small>Dicetak Tanggal <?php echo ucwords(strtolower(date('j F Y, g:i a'))) ?>, Melalui: <strong>iClass</strong> www.namadomain.com</small>