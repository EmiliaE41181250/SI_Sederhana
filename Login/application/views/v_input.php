<!DOCTYPE html>
<html>

<head>

	<title>Literasi Bahasa</title>
	<link rel="stylesheet" href="assets/style/tampil.css">
</head>

<body>

	<center>
		<h1>Data Puisi</h1>
		<h3>Tambahkan</h3>
	</center>
	<!-- aksi dari form diarahkan ke metod tambah_aksi pada controller crud -->
	<form action="<?php echo base_url() . 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<!-- menginputkan data baru ke kolom judul -->
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<!-- menginputkan data baru ke kolom nama penulis -->
				<td>Nama Penulis</td>
				<td><input type="text" name="nama_penulis"></td>
			</tr>
			<tr>
				<!-- menginputkan data baru ke kolom tgl_terbit -->
				<td>Tgl Terbit</td>
				<td><input type="date" name="tgl_terbit"></td>
			</tr>
			<tr>
				<!-- menginputkan data baru ke kolom karya -->
				<td>Karya</td>
				<td><input type="file" name="karya"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	<center>
		<!-- membuat link untuk menuju ke form data penulis -->
		<a href="<?php echo base_url('crud2/next2'); ?>">Data Penulis </a>
		<br>
		<!-- membuat link untuk kembali ke form awal -->
		<br>
		<a href="<?php echo base_url('crud/next'); ?>">Kembali </a>
		<br>
		<!-- membuat link untuk menuju ke form logaout -->
		<br>
		<a href="<?php echo base_url('login/logout'); ?>">Logout</a> </center>

	</center>
</body>

</html>