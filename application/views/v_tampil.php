<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center><h1>CRUD CodeIgniter </h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama Debitur</th>
			<th>Sisa Pinjaman</th>
			<th>Tanggal Jatuh Tempo</th>
			<th>Petugas Lapangan</th>
			<th>Hasil Penagihan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo indo_currency($u->sisa) ?></td>
			<td><?php echo indo_date($u->tgl) ?></td>
			<td><?php echo $u->petugas ?></td>
			<td><?php echo indo_currency($u->hasil) ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->pinjam_id,'Edit'); ?>
                  <?php echo anchor('crud/hapus/'.$u->pinjam_id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>