<!DOCTYPE html>
<html>
<head>
	<title>CRUD | Tambah</title>
</head>
<body>
	<center>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Debitur *</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Sisa Pinjaman *</td>
				<td><input type="number" name="sisa" required></td>
			</tr>
			<tr>
				<td>tanggal *</td>
				<td><input type="date" name="tgl" required></td>
			</tr>
			<tr>
				<td>Petugas Lapangan *</td>
				<td><select name="petugas" required>
          			<option value="">- Pilih -</option>
          			<option value="Giyatno"> Giyatno</option>
          			<option value="Fareza"> Fareza</option>
          			<option value="Thamrin"> Thamrin</option>
          		</select></td>
			</tr>
			<tr>
				<td>Hasil Penagihan *</td>
				<td><input type="number" name="hasil"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>