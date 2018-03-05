<!DOCTYPE html>
<html>
<head>
	<title>Sistem Peminjaman Registrasi</title>
</head>
<body>
	<form action="<?php echo site_url('Pinjaman/registrasi'); ?>" method="POST">
		<label for="nama">Nama : </label>
		<input type="text" name="nama">
		<br>
		
		<label for="nim">NIM : </label>
		<input type="text" name="nim">
		<br>
		
		<label for="fakultas">Fakultas : </label>
		<input type="text" name="fakultas">
		<br>

		<label for="programstudi">Program Studi : </label>
		<input type="text" name="programstudi">
		<br>

		<label for="ipk">IPK : </label>
		<input type="text" name="ipk">
		<br>

		<label for="nohp">No Hp : </label>
		<input type="text" name="nohp">
		<br>

		<label for="nohportu">No Hp Orang Tua : </label>
		<input type="text" name="nohportu">
		<br>

		<label for="persyaratan">Persyaratan: </label>
		<input type="checkbox" name="persyaratan1" value="ktm">
		<input type="checkbox" name="persyaratan2" value="khs">
		<input type="checkbox" name="persyaratan3" value="invoice">
		<input type="checkbox" name="persyaratan4" value="transkripnilai">
		<br>

		<label for="pengajuanpinjaman">Pengajuan Pinjaman : </label>
		<input type="text" name="pengajuanpinjaman">
		<br>

		<label for="wd3">Disetujui WD III</label>
		<input type="text" name="wd3">
		<br>

		<label for="catatan">Catatan : </label>
		<input type="text" name="catatan">
		<br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>