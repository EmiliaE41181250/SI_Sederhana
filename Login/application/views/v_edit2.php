<!DOCTYPE html>
<html>

<head>

	<title>Literasi Bahasa</title>

</head>

<body>

	<center>
		<h1>Tentang Penulis</h1>
		<h3>Edit</h3>
	</center>
	<!-- ini sebagai form yg menampilkan data yg akan di edit -->
	<?php foreach ($tb_penulis as $u) { ?>
		<form action="<?php echo base_url() . 'crud2/update2'; ?>" method="post">
			<table style="margin:20px auto;">
				<tr>
					<td>Nama Penulis</td>
					<td>
						<!-- membuat id penulis menjadi otomatis/ auto increment-->
						<input type="hidden" name="id_penulis" value="<?php echo $u->id_penulis ?>">
						<!-- mengambil data dari data base kolom nama penulis untuk dapat diisikan/diedit data baru -->
						<input type="text" name="nama_penulis" value="<?php echo $u->nama_penulis ?>">
					</td>
				</tr>

				<tr>
					<td>Alamat</td>
					<!-- mengambil data dari data base kolom alamat untuk dapat diisikan/diedit data baru -->
					<td><input type="varchar" name="alamat" value="<?php echo $u->alamat ?>"></td>
				</tr>

				<tr>
					<td>Telepon</td>
					<!-- mengambil data dari data base kolom nama telepon untuk dapat diisikan/diedit data baru -->
					<td><input type="text" name="telepon" value="<?php echo $u->telepon ?>"></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>
				</tr>
			</table>
		</form>
	<?php } ?>
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