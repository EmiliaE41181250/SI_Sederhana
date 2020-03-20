<!DOCTYPE html>
<html>

<head>

	<title>Literasi Bahasa</title>
</head>

<body>

	<center>
		<h1>Tentang Penulis</h1>
		<h3>Tambahkan Penulis</h3>
	</center>
	<!-- aksi dari form diarahkan ke metod tambah_aksi pada controller crud -->
	<form action="<?php echo base_url() . 'crud2/tambah_aksi2'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Penulis</td>
				<!-- menginputkan data baru ke kolom nama penulis -->
				<td><input type="text" name="nama_penulis"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<!-- menginputkan data baru ke kolom alamat -->
				<td><input type="text" name="alamat"></td>
			</tr>

			<tr>
				<td>Telepon</td>
				<!-- menginputkan data baru ke kolom telepon -->
				<td><input type="text" name="telepon"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	<center>
		<!-- membuat link untuk menuju ke form data puisi -->
		<a href="<?php echo base_url('crud/next'); ?>">Data Puisi </a>
		<br>
		<!-- membuat link untuk kembali ke form awal -->
		<br>
		<a href="<?php echo base_url('crud2/next2'); ?>">Kembali </a>
		<br>
		<!-- membuat link untuk menuju ke form logout -->
		<br>
		<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
	</center>
</body>

</html>