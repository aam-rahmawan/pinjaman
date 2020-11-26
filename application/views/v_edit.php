<!DOCTYPE html>
<html>
<head>
	<title>CRUD | Edit</title>
</head>
<body>
	<center>
		<center><h1>CRUD CodeIgniter </h1></center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($p_pinjam as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="pinjam_id" value="<?php echo $u->pinjam_id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Sisa Pinjaman</td>
				<td><input type="number" name="sisa" value="<?php echo $u->sisa ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Jatuh Tempo</td>
				<td><input type="date" name="tgl" value="<?php echo $u->tgl ?>"></td>
			</tr>
			<tr>
				<td>Petugas Lapangan</td>
				<td><select name="petugas" id="petugas">
						<option value="Giyatno" <?php echo ($u->petugas ? 'Giyatno' : 'selected' ); ?> >Giyatno</option>
						<option value="Fareza" <?php echo ($u->petugas ? 'Fareza' : 'selected' ); ?>>Fareza</option>
						<option value="Thamrin" <?php echo ($u->petugas ? 'Thamrin' : 'selected' ); ?>>Thamrin</option>
					</select></td>
			</tr>
			<tr>
				<td>Hasil Penagihan</td>
				<td><input type="number" name="hasil" value="<?php echo $u->hasil ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>