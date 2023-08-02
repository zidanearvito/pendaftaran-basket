<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Data</title>
</head>
<body>
	<h2>Form Edit Data</h2>
	<form action="<?php echo base_url().'/registrasi/update'; ?>" method="post">
		<input type="hidden" name="id" value="<?php echo $registrasi['id']; ?>">
		<table>
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis" value="<?php echo $registrasi['nis']; ?>"></td>
			</tr>
			<tr>
				<td>Nama Siswa</td>
				<td><input type="text" name="nama_siswa" value="<?php echo $registrasi['nama_siswa']; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jenis_kelamin">
						<option value="Laki-laki" <?php if($registrasi['jenis_kelamin']=='Laki-laki') echo 'selected="selected"'; ?>>Laki-laki</option>
						<option value="Perempuan" <?php if($registrasi['jenis_kelamin']=='Perempuan') echo 'selected="selected"'; ?>>Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Umur</td>
				<td><input type="text" name="umur" value="<?php echo $registrasi['umur']; ?>"></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td><input type="text" name="agama" value="<?php echo $registrasi['agama']; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"><?php echo $registrasi['alamat']; ?></textarea></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" value="<?php echo $registrasi['kelas']; ?>"></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td><input type="text" name="hobi" value="<?php echo $registrasi['hobi']; ?>"></td>
			</tr>
			<tr>
				<td>Tinggi Badan</td>
				<td><input type="text" name="tinggi_badan" value="<?php echo $registrasi['tinggi_badan']; ?>"></td>
			</tr>
			<tr>
				<td>Berat Badan</td>
				<td><input type="text" name="berat_badan" value="<?php echo $registrasi['berat_badan']; ?>"></td>
			</tr>
			<tr>
				<td>Alasan Basket</td>
				<td><textarea name="alasan_basket"><?php echo $registrasi['alasan_basket']; ?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>