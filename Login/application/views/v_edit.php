<!DOCTYPE html>
<html>

<head>

	<title>Literasi Bahasa</title>
	<link rel="stylesheet" href="assets/style/edit2.css">
</head>

<body>

	<center>
		<h1>Data Puisi</h1>
		<h3>Edit</h3>
	</center>
	<!-- ini sebagai form yg menampilkan data yg akan di edit -->
	<?php foreach ($tb_konten as $u) { ?>
		<form action="<?php echo base_url() . 'crud/update'; ?>" method="post">
			<table style="margin:20px auto;">
				<tr>
					<td>Judul</td>
					<td>
						<!-- membuat id penulis menjadi otomatis/ auto increment-->
						<input type="hidden" name="id_puisi" value="<?php echo $u->id_puisi ?>">
						<!-- mengambil data dari data base kolom nama penulis untuk dapat diisikan/diedit data baru -->
						<input type="text" name="judul" value="<?php echo $u->judul ?>">
					</td>
				</tr>
				<tr>
					<td>Tgl Terbit</td>
					<!-- mengambil data dari data base kolom tgl_terbit untuk dapat diisikan/diedit data baru -->
					<td><input type="date" name="tgl_terbit" value="<?php echo $u->tgl_terbit ?>"></td>
				</tr>
				<tr>
					<td>Nama Penulis</td>
					<!-- mengambil data dari data base kolom nama_penulis untuk dapat diisikan/diedit data baru -->
					<td><input type="text" name="nama_penulis" value="<?php echo $u->nama_penulis ?>"></td>
				</tr>
				<tr>
					<td>Karya</td>
					<!-- mengambil data dari data base kolom karya untuk dapat diisikan/diedit data baru -->
					<td><input type="file" name="karya" value="<?php echo $u->karya ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>
				</tr>
			</table>
		</form>
	<?php } ?>
	<center>
		<a href="<?php echo base_url('crud2/next2'); ?>">Data Penulis </a>
		<br>
		<br>
		<a href="<?php echo base_url('crud/next'); ?>">Kembali </a>
		<br>
		<br>
		<a href="<?php echo base_url('login/logout'); ?>">Logout</a> </center>
</body>

</html>